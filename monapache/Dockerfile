# Utilise l'image officielle PHP avec Apache
FROM php:8.3-apache

# Mise à jour + installation d’outils utiles
RUN apt update && apt upgrade -y && apt install -y git vim nano curl wget telnet links

# Active les extensions MySQL nécessaires à PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Active un fichier de config PHP (optionnel)
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Cloner le repo directement dans le bon dossier
WORKDIR /var/www/html
RUN git clone https://github.com/carotte100/TP_serv.git .

# Ouvre le port HTTP
EXPOSE 80

# Commande par défaut pour lancer Apache
CMD ["apache2-foreground"]
