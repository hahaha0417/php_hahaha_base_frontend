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
#我有很多.sh檔，在子資料夾
RUN find . -type f -name "*.sh" -exec chmod +x "{}" \;
RUN sh "git clone.sh"
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
COPY --from=build /php_hahaha_base_frontend ./php_hahaha_base_frontend

RUN mkdir -p /var/www/html/php_hahaha_base_frontend/project/app/storage /var/www/html/php_hahaha_base_frontend/project/app/bootstrap/cache && \
    chown -R 755 www-data:www-data /var/www/html



CMD service php8.2-fpm start && nginx -g "daemon off;"
