##Dockerfile 1 : Konfigurasi PHP dan Apache
##. Konfigurasi untuk PHP (termasuk extension yang dibutuhkan)
FROM php:7.4.15-apache
RUN docker-php-ext-install mysqli
COPY . /usr/src/trucorp-web-2.0
COPY index.php /var/www/html/
WORKDIR /var/www/html
EXPOSE 80


##. Control Permissions
RUN chown -R www-data:www-data /usr/
RUN chmod -R 774 /usr/