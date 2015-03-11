#!/bin/bash

docker run --name web-services -d -v $PWD:/var/www/html kmugrage/docker-apache /usr/sbin/apache2ctl -D FOREGROUND
