FROM php:8.4-apache

# Copiar todos los archivos del repo al servidor web
COPY . /var/www/html/

# Dar permisos
RUN chown -R www-data:www-data /var/www/html