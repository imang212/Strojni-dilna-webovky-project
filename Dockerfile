FROM php:8.1-apache
# Instalace potřebných rozšíření PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Povolení mod_rewrite pro Apache
RUN a2enmod rewrite
# Nastavení správných oprávnění
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
# Kopírování konfiguračního souboru PHP (volitelné)
COPY php.ini /usr/local/etc/php/
# Kopírování Apache konfigurace (volitelné)
COPY apache.conf /etc/apache2/sites-available/000-default.conf
# Restart Apache pro aplikování změn
RUN service apache2 restart
EXPOSE 80