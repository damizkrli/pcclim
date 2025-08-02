# ── STAGE 1 : installation des dépendances et build Composer
FROM php:8.2-fpm-alpine AS builder
WORKDIR /app

# Installer paquets système et extensions PHP
RUN apk add --no-cache \
    icu-dev oniguruma-dev zip unzip git bash curl \
    && docker-php-ext-install intl opcache \
    && rm -rf /var/cache/apk/*

# Copier l'ensemble de l'application
COPY . .

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Installer les dépendances sans scripts, puis warmup du cache
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# ── STAGE 2 : image finale avec PHP-FPM + Nginx + Certbot
FROM php:8.2-fpm-alpine
WORKDIR /app

# Installer Nginx, supervisord, Certbot et plugin Nginx
RUN apk add --no-cache \
    nginx \
    supervisor \
    certbot \
    certbot-nginx \
    && rm -rf /var/cache/apk/*

# Créer le dossier conf.d pour vhosts
RUN mkdir -p /etc/nginx/conf.d

# Créer les dossiers nécessaires pour Nginx
RUN mkdir -p /run/nginx /var/log/nginx

# Copier le code compilé depuis le builder
COPY --from=builder /app /app

# Copier la configuration Nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Ajuster permissions (cache, logs)
RUN mkdir -p var/cache var/log \
    && chown -R www-data:www-data var \
    && chown -R www-data:www-data /var/log/nginx

# Exposer les ports HTTP et HTTPS
EXPOSE 80 443

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm", "-D", "&&", "exec", "nginx", "-g", "daemon off;"]
