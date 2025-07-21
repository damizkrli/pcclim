FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y libicu-dev libzip-dev unzip && \
    docker-php-ext-install intl zip opcache pdo pdo_mysql

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

COPY . /var/www/html/
COPY .env.local /var/www/html/.env

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

ENV APP_ENV=prod

EXPOSE 80

CMD ["apache2-foreground"]
