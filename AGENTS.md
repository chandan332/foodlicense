# AGENTS.md

## Project

Laravel 13 + Livewire 4 + Tailwind CSS 4 app for FSSAI food licensing. PHP 8.3+.

## Key Commands

- **First-time setup:** `composer setup` (installs deps, copies .env, generates key, migrates, builds frontend)
- **Dev server:** `composer dev` (artisan dev — starts Laravel, queue, Vite, and Pail concurrently)
- **Frontend only:** `npm run dev` (Vite dev server on port 5173)
- **Full CI check:** `composer test` (runs in order: config:clear → Pint lint → Larastan → Pest)
- **Lint only:** `composer lint:check` (Pint in dry-run mode)
- **Type check only:** `composer types:check` (Larastan level 7)
- **Tests only:** `php artisan test` (Pest 5, SQLite in-memory)

The `composer test` command must run in order: **lint → typecheck → test**. Do not skip steps.

## Architecture

- **Livewire-first:** Views use Livewire components. Expect new features as Livewire classes in `app/Livewire/` with corresponding Blade views in `resources/views/livewire/`.
- **Routes:** Minimal — `routes/web.php` defines 2 routes (welcome page, FSSAI registration page). Most logic lives in Livewire components.
- **Database:** PostgreSQL in dev (Docker Compose), SQLite `:memory:` in tests. Migrations in `database/migrations/`.
- **Frontend:** Vite 8 + Tailwind CSS 4 + `@tailwindcss/vite` plugin. Entry points: `resources/css/app.css`, `resources/js/app.js`. Assets in `resources/images/`, `resources/fonts/`.

## Devcontainer

Docker Compose provides: devcontainer (PHP 8.5), PostgreSQL, Adminer (port 8080). Forwarded ports: 5173 (Vite), 8000 (Laravel).

## Testing

- Pest 5 with `RefreshDatabase` trait auto-applied to Feature tests (see `tests/Pest.php`).
- Feature tests in `tests/Feature/`, Unit tests in `tests/Unit/`.
- Tests use SQLite in-memory — no external services needed.

## Code Style

- Laravel Pint preset: `laravel` (see `pint.json`).
- EditorConfig: 4-space indent, UTF-8, LF line endings.
- Larastan level 7 (strict).
