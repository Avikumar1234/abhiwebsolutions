#!/usr/bin/env bash
set -o errexit

composer install --no-dev
php artisan config:cache
npm install
npm run build
php artisan migrate --force
