#!/usr/bin/env bash
set -e
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan storage:link || true
php artisan optimize
php artisan filament:optimize
echo "Deployment optimization complete."
