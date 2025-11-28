# Use a base image with PHP 9 and Apache
FROM php:8.2-apache

# Install Xdebug
RUN apt-get update && apt-get install -y \
    $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configure Xdebug (adjust as needed for your IDE and network setup)
COPY xdebug.ini "${PHP_INI_DIR}/conf.d"

# Charger l'application en la copiant avec cette ligne (s'il n'y a pas de port mapping dans le compose.yaml)
#COPY ../ /var/www/html

# Expose port 80 for Apache
EXPOSE 80