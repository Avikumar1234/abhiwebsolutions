#!/usr/bin/env bash

# Exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Laravel specific
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
