#!/usr/bin/env bash

# Fail on error
set -e

echo "Starting Railway Release Phase..."

echo "1. Caching Configuration and Routes..."
php artisan optimize:clear
php artisan optimize

echo "2. Handling Storage Symlink..."
# Make storage link idempotent to avoid errors if it already exists
if [ ! -L public/storage ] && [ ! -d public/storage ]; then
    echo "Creating public/storage symlink..."
    php artisan storage:link
else
    echo "Storage link already exists. Skipping."
fi

echo "3. Running Database Migrations..."
# Run migrations safely in production
php artisan migrate --force

echo "Release phase completed successfully."
