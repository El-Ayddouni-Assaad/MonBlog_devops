FROM php:apache

COPY ./MonBlog4 /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

EXPOSE 80