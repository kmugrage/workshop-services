#!/bin/bash

docker run --rm -it -v=$PWD:/var/www/html -w=/var/www/html kmugrage/workshop-services phpunit -c phpunit.xml