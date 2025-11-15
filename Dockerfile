# ===========================
# 1. Build Stage (Debian + php-fpm)
# ===========================
FROM php:8.2-fpm AS build

# Install PHP deps
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring xml zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project
WORKDIR /php_hahaha_base_frontend
COPY . .

# Run your custom Git script
WORKDIR /php_hahaha_base_frontend/batch_file/git
RUN chmod +x clone.sh && ./clone.sh

# Laravel build
WORKDIR /php_hahaha_base_frontend/project/app

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear


# ===========================
# 2. Runtime Stage (Debian-based PHP-FPM + Nginx)
# ===========================
FROM debian:12 AS runtime

# Install PHP-FPM + PHP extensions + Nginx
RUN apt-get update && apt-get install -y \
    nginx php-fpm php-mbstring php-zip php-xml php-curl php-pgsql php-mysql php-cli php-opcache \
    && apt-get clean

# Copy Nginx config
COPY deploy/nginx.conf /etc/nginx/sites-enabled/default

# Copy Laravel app from build stage
WORKDIR /var/www/html
COPY --from=build /php_hahaha_base_frontend/project/app .

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Start services
CMD service php8.2-fpm start && nginx -g "daemon off;"
