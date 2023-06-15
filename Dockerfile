# Указываем базовый образ
FROM php:7.4-apache

# Копируем исходный код проекта в контейнер
COPY . /var/www/html

# Устанавливаем зависимости и расширения PHP
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем зависимости проекта с помощью Composer
RUN composer install

# Указываем рабочую директорию
WORKDIR /var/www/html

# Открываем порт Apache
EXPOSE 80
