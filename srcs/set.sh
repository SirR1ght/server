#!/bin/sh

#SSL - generate a self signed root certificate:
mkdir /etc/nginx/ssl && \
openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
-subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=SirR1ght/CN=html" \
-keyout /etc/nginx/ssl/SirR1ght.key \
-out /etc/nginx/ssl/SirR1ght.pem 

#Nginx
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
chown -R www-data:www-data /var/www/*
chown -R 755 /var/www/*

#mysql
service mysql start
mysql --execute="CREATE USER 'admin'@'localhost' IDENTIFIED BY 'nimad'; \
	CREATE DATABASE wp_db; \
	GRANT ALL PRIVILEGES ON wp_db.* TO 'admin'@'localhost'; \
	FLUSH PRIVILEGES;"

service php7.3-fpm start
service nginx start

bash