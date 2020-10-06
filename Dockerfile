FROM php:7.0-apache

RUN apt-get update && \
    apt-get clean

COPY ssrf-labs /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80