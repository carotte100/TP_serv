FROM php:8.3-apache

RUN apt update && apt upgrade -y && apt install -y git vim nano curl wget telnet links

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Clone dans /var/www/html
WORKDIR /var/www/
RUN git clone https://github.com/carotte100/TP_serv.git html

# Change le dossier Apache vers /var/www/html/TP
ENV APACHE_DOCUMENT_ROOT /var/www/html/TP

# Mise à jour du virtualhost pour qu’il prenne en compte le bon dossier
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/TP|' /etc/apache2/sites-available/000-default.conf

# Active le nouveau dossier racine
WORKDIR /var/www/html/TP

EXPOSE 80
CMD ["apache2-foreground"]
