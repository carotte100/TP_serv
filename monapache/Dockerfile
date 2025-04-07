# Utilise l'image officielle PHP avec Apache
FROM php:8.3-apache

# Mise à jour + installation d’outils utiles
RUN apt update && apt upgrade -y && apt install -y git vim nano curl wget telnet links

# Active les extensions MySQL nécessaires à PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Active un fichier de config PHP (optionnel)
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Clone ton repo GitHub dans le conteneur
WORKDIR /var/www/
RUN git clone https://github.com/carotte100/TP_serv.git html

# On va dire à Apache d'utiliser le dossier TP comme racine du site
ENV APACHE_DOCUMENT_ROOT /var/www/html/TP

# Mise à jour du VirtualHost d'Apache pour le nouveau chemin
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/TP|' /etc/apache2/sites-available/000-default.conf

# Copie du fichier de connexion si besoin
WORKDIR /var/www/html/TP
# RUN cp connect.php.docker connect.php  # Décommente si tu as ce fichier

# Ouvre le port HTTP
EXPOSE 80

# Commande par défaut pour lancer Apache
CMD ["apache2-foreground"]
