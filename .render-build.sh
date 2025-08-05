#!/usr/bin/env bash

# PHP dependencies
composer install --no-dev --optimize-autoloader

# Node modules + Vite build
npm install
npm run build

# Laravel caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

