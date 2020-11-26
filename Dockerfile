FROM ubuntu:20.04


RUN apt update \
&& echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections \
&&  apt  -y install php php-dev php-xml php-mbstring php-gmp php-cli php-json git



COPY   . /app

WORKDIR /app



ENTRYPOINT ["php", "/app/bot.php"]

CMD ["@your_telegram_username"]



