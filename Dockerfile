# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: SirR1ght <SirR1ght@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/20 18:12:43 by SirR1ght          #+#    #+#              #
#    Updated: 2022/12/17 22:54:49 by SirR1ght         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

LABEL maintainer="SirR1ght"

RUN apt-get -y update && apt-get install -y \
    nginx \
    wget \
    php7.3-fpm \
    php7.3-common \
    php7.3-mysql \
    php7.3-xml \
    php7.3-xmlrpc \
    php7.3-gmp \
    php7.3-curl \
    php7.3-gd \
    php7.3-cli \
    php7.3-zip \
    php7.3-soap \
    php7.3-intl \
    mariadb-server

#FPM (FastCGI Process Manager, менеджер процессов FastCGI)
#является альтернативной реализацией PHP FastCGI с несколькими
#дополнительными возможностями обычно используемыми для высоконагруженных сайтов.
#xml - язык разметки
#xmlrpc remote procedure call - протокол вызова удаленных процедур
#gmp - library for cryptography and work with large nubers, floats and etc.
#curl -  library and command-line tool for transferring data using various network protocols
#gd - graphics library for different types of image formats
#soap - simple object access protocol 
#intl - internationalization module

#Nginx
COPY ./srcs/nginx.conf etc/nginx/sites-available/
COPY ./srcs/autoindex_on.sh ./
COPY ./srcs/autoindex_off.sh ./
   
#WordPress
RUN wget https://wordpress.org/latest.tar.gz && \
    tar -xf latest.tar.gz -C /var/www/html/

COPY ./srcs/wp-config.php /var/www/html/wordpress/

#phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mkdir /var/www/html/phpmyadmin && \
    tar -xf phpMyAdmin-5.0.4-all-languages.tar.gz --strip-components 1 -C /var/www/html/phpmyadmin

COPY ./srcs/config.inc.php /var/www/html/phpmyadmin/

EXPOSE 80 443

ENV TZ=Europe/Moscow

COPY ./srcs/set.sh ./

CMD bash ./set.sh
