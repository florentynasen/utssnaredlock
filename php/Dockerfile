FROM php:8.1-apache

COPY index.php /var/www/html

RUN docker-php-ext-install mysqli 
RUN docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html/index.php

EXPOSE 80 7077
