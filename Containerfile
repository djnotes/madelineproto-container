FROM docker.io/php:8.2.1-cli-alpine



RUN apk add git php-pcntl \ 
 php-dom php-ctype php-fileinfo php-sqlite3 php-xml

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && install composer.phar /usr/local/bin/composer


#Copy project contents
COPY   .  /app 
WORKDIR /app

#Install dependencies mentioned in composer.json and composer.lock
RUN composer install  --no-interaction


CMD [ "echo", "Hello from MadelineProto Container Image" ]


