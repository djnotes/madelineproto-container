FROM ubuntu:20.04


RUN apt update \
&&  apt  -y install php php-dev php-xml php-mbstring php-gmp php-cli php-json git



COPY   . /app

WORKDIR /app


CMD [php /app/bot.php]

