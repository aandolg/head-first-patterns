#!/usr/bin/env bash
set -a

docker exec -u root head_first-apache bash -c "curl -o /tmp/composer.phar https://getcomposer.org/download/1.10.19/composer.phar"
docker exec -u root head_first-apache bash -c "cp /tmp/composer.phar /bin/composer"
docker exec -u root head_first-apache bash -c "ln -s /bin/composer /usr/local/bin/composer"
docker exec -u root head_first-apache bash -c "chmod +x /usr/local/bin/composer"
