#!/bin/bash
service supervisor start
/usr/local/sbin/php-fpm &
php /var/www/symfony_docker/bin/console app:websocket-server &
tail -f /dev/null