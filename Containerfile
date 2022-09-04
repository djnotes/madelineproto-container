FROM php:alpine 



RUN apk add composer git php-pcntl \ 
 php-dom php-ctype php-fileinfo php-sqlite3 php-xml



#Copy project contents
COPY   .  /app 
WORKDIR /app

#Install dependencies mentioned in composer.json and composer.lock
RUN composer install  --no-interaction


CMD [ "php", "app.php" ]


