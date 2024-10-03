FROM php:8.2-apache

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer     verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# Install unzip utility and libs needed by zip PHP extension
RUN apt-get update && apt-get install -y \
    git\
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql

# Install Laravel
RUN composer global require laravel/installer && \
    ln -s ~/.composer/vendor/bin/laravel /usr/local/bin/laravel

#install node
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs