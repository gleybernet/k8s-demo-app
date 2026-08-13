FROM php:8.3-apache-bookworm

COPY src/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80