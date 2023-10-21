# ================================>>Please use my image<<======================================]
# Set version
ARG APP_VERSION=8.1-fpm-nginx

FROM sovichea10/laravel-app-php:${APP_VERSION}

### NGINX
COPY ./nginx-status /usr/share/nginx/html
COPY ./conf.d /etc/nginx/conf.d
### NGINX

## PHP INI Configuration
COPY ./custom.ini /usr/local/etc/php/conf.d/custom.ini

COPY ./entrypoint.sh /etc/entrypoint.sh

# To be executable
RUN chmod -R 755 /etc/entrypoint.sh

# Copy directory
COPY . /var/www/laravel10

WORKDIR /var/www/laravel10

# Install PHP Composer
RUN COMPOSER_MEMORY_LIMIT=-1 composer update
RUN cp .env.example .env

RUN php artisan key:generate

RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/laravel10/storage

# Run Process in Foreground
ENTRYPOINT [ "/etc/entrypoint.sh" ]
