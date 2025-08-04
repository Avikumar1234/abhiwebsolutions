#!/usr/bin/env bash

set -o errexit

# PHP dependencies
composer install --no-dev --optimize-autoloader

# Node modules + Vite build
npm install
npm run build

# Laravel config caching
php artisan config:cache
php artisan route:cache
php artisan view:cache
