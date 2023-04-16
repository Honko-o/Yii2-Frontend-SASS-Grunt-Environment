FROM yiisoftware/yii2-php:8.1-apache

# Change document root for Apache
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf