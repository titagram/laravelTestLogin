FROM php:8.2-fpm

# Installa dipendenze
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Installa estensioni PHP
RUN docker-php-ext-install pdo pdo_mysql

# Installa Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install


# Esponi la porta 9000 per php-fpm
EXPOSE 9000

CMD ["php-fpm"]