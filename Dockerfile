# ===========================
# 1. Build stage
# ===========================
FROM php:8.2-fpm AS build

# Install system deps
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring xml zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set workdir
WORKDIR /

# Copy project
COPY . /php_hahaha_base_frontend



cd /php_hahaha_base_frontend/project/app

# Install dependencies
#RUN composer install --optimize-autoloader --no-dev
RUN composer install --no-dev

# Generate optimized config
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# ===========================
# 2. Runtime (Nginx + PHP-FPM)
# ===========================
FROM nginx:alpine AS runtime

# Install PHP-FPM inside Alpine
RUN apk add --no-cache php82 php82-fpm php82-opcache \
    php82-mbstring php82-pdo php82-pdo_mysql php82-pdo_pgsql \
    php82-tokenizer php82-xml php82-zip
	
WORKDIR /

# Copy Nginx config
COPY deploy/nginx.conf /etc/nginx/conf.d/default.conf

# Copy Laravel app from build stage
COPY --from=build /php_hahaha_base_frontend /var/www/html

WORKDIR /var/www/html

CMD ["nginx", "-g", "daemon off;"]
