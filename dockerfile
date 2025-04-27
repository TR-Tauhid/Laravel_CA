FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache --update \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-enable opcache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy application files
COPY . /var/www/html

# Set file permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html/bootstrap/cache /var/www/html/storage

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate application key
RUN php artisan key:generate --ansi

# Optimize Laravel
RUN php artisan route:cache
RUN php artisan config:cache
RUN php artisan event:cache
# RUN php artisan view:cache

# Expose port 8000
EXPOSE 8000

# Start the PHP-FPM server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]