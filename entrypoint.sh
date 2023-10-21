#!/bin/bash

# Config cache
php artisan config:cache

# Run php service
php-fpm -D

# Run nginx service
nginx -g 'daemon off;'
