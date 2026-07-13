#!/bin/bash
set -e

# Cache config/routes/views now that env vars are available at runtime
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations automatically on deploy
php artisan migrate --force

exec "$@"