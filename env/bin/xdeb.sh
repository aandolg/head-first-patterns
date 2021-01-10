#!/usr/bin/env bash

set -a
CURRENT_HOST_IP=$(hostname -I | egrep -o "^([^ ])*")
CURRENT_HOST_IP="192.168.0.101"
HOST_NAME="head-first.local"

if [ -z $1 ]; then
    echo "Disabling xdebug...";
    docker exec -u root head_first-apache rm "/usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache pecl uninstall xdebug
else
    echo "Enabling xdebug...";
    docker exec -u root head_first-apache pecl install xdebug-2.9.0
    PATH_DEBUG=$( docker exec -u root head_first-apache ls "/usr/local/lib/php/extensions/" | grep "debug")
    PATH_DEBUG="/usr/local/lib/php/extensions/"${PATH_DEBUG}"/"$( docker exec -u root head_first-apache ls "/usr/local/lib/php/extensions/${PATH_DEBUG}" | grep "debug")
    docker exec -u root head_first-apache sh -c "echo 'zend_extension=${PATH_DEBUG}' > /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.remote_enable=1' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.remote_autostart=1' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.remote_host=${CURRENT_HOST_IP}' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.remote_port=9009' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.idekey=PHPSTORM' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.log=/tmp/xdeb.log' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker exec -u root head_first-apache sh -c "echo 'xdebug.log_level=10' >> /usr/local/etc/php/conf.d/zdebug.ini"
    docker container exec -u root head_first-apache sh -c "echo #!/bin/sh > /xdeb.sh"
    docker container exec -u root head_first-apache sh -c "echo echo \"export PHP_IDE_CONFIG=serverName=${HOST_NAME}\" \>\> /etc/bash.bashrc >> /xdeb.sh"
    docker container exec -u root head_first-apache sh -c "chmod 777 /xdeb.sh"
    docker container exec -u root head_first-apache sh -c "/xdeb.sh && rm /xdeb.sh"
fi;
echo "Reload container php-apache"
docker container restart head_first-apache
