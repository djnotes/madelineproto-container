FROM ubuntu:20.04



RUN apt update \
&& echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections \
&&  apt  -y install php php-dev php-xml php-mbstring php-gmp php-cli php-json git 

# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
# && php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
# && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
# && php -r "unlink('composer-setup.php');"

#Copy project contents
COPY   .  /app 
WORKDIR /app

#Install dependencies mentioned in composer.json and composer.lock
RUN composer install  --no-interaction





ENTRYPOINT ["php", "/app/bot.php"]

CMD ["@johndoe"]



