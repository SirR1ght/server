#!/bin/sh
sed -i "s/autoindex on;/autoindex off;/g" /etc/nginx/sites-available/nginx.conf
service nginx stop
service nginx start