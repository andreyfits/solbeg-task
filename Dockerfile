FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql \
    && pecl install redis \
    && docker-php-ext-enable redis

WORKDIR /app
COPY . /app

RUN chown -R www-data:www-data /app/storage /app/bootstrap

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
