FROM mcr.microsoft.com/devcontainers/php:3-8.5-trixie

RUN apt-get update && apt-get install -y libpq-dev iputils-ping \
    && docker-php-ext-install pcntl pdo_pgsql

RUN (php -m | grep -qi xdebug || pecl install xdebug) \
    && docker-php-ext-enable xdebug 2>/dev/null || true \
    && { \
        echo 'xdebug.mode=debug,develop'; \
        echo 'xdebug.start_with_request=yes'; \
        echo 'xdebug.client_host=localhost'; \
        echo 'xdebug.client_port=9003'; \
        echo 'xdebug.discover_client_host=false'; \
    } > /usr/local/etc/php/conf.d/xdebug.ini

RUN export NVM_DIR="/usr/local/share/nvm" \
    && [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh" \
    && nvm install --lts \
    && nvm use --lts
