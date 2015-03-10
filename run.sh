#!/bin/bash

docker run --rm -it -v=$PWD/workshop-services/:/var/www/html -w=/var/www/html kmugrage/workshop-services phpunit
