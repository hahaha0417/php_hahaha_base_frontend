# ===========================
# 1. BUILD STAGE
# ===========================
FROM php:8.2-fpm AS build

RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring xml zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy repository
WORKDIR /php_hahaha_base_frontend
COPY . .

# ----------- Your clone script ------------
WORKDIR /php_hahaha_base_frontend/batch_file/git
RUN chmod +x clone.sh && ./clone.sh
# -------------------------------------------

# ===== Laravel build inside /project/app =====
WORKDIR /php_hahaha_base_frontend/project/app

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# ===== Copy build result to /public/app =====
RUN rm -rf /php_hahaha_base_frontend/public/app && \
    cp -r /php_hahaha_base_frontend/project/app /php_hahaha_base_frontend/public/app


# ===========================
# 2. RUNTIME STAGE
# ===========================
FROM debian:12 AS runtime

RUN apt-get update && apt-get install -y \
    nginx php-fpm php-mbstring php-zip php-xml php-curl php-pgsql php-mysql php-cli php-opcache \
    && apt-get clean

# nginx config
COPY deploy/nginx.conf /etc/nginx/sites-enabled/default

# copy built Laravel to runtime
WORKDIR /var/www/html
COPY --from=build /php_hahaha_base_frontend/public/app .

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD service php8.2-fpm start && nginx -g "daemon off;"
