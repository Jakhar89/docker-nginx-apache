FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite

#RUN mkdir /app 

#EXPOSE 80

#RUN echo "ServerName localhost" >> /etc/httpd/conf/httpd.conf
#CMD apachectl -DFOREGROUND

#COPY www/ /var/www/html/.