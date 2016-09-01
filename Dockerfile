FROM php:apache
RUN a2enmod rewrite
COPY ./html /var/www/html/
