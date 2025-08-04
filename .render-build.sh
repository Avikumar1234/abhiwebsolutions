#!/usr/bin/env bash

# Install PHP dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Laravel config and key
php artisan config:cache
php artisan route:cache
php artisan view:cache

