FROM ubuntu:trusty

MAINTAINER Andri Kurnia Putra <andri.24434@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

# add PHP7 unofficial repository (https://launchpad.net/~ondrej/+archive/ubuntu/php)
RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu `lsb_release -cs` main" > /etc/apt/sources.list.d/php.list

# install packages
RUN apt-get update && \
    apt-get -y --force-yes --no-install-recommends install \
    apache2 php7.2 php7.2-cli php7.2-common php7.2-dev php7.2-curl php7.2-gd php7.2-intl php7.2-json php7.2-mbstring php7.2-mysql php7.2-opcache php7.2-soap php7.2-sqlite3 php7.2-xml php7.2-xmlrpc php7.2-xsl php7.2-zip
RUN a2enmod rewrite
# clear apt cache and remove unnecessary packages
RUN apt-get autoclean && apt-get -y autoremove
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
# NGINX ports
EXPOSE 80 443
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]