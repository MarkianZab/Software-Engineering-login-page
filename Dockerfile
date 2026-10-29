FROM php:8.2-apache

# Use the standard production php.ini (turns on output buffering like XAMPP,
# so session_start() and header() work even after HTML output)
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN a2enmod rewrite

COPY . /var/www/html/

EXPOSE 80
