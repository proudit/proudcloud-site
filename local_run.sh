#!/bin/sh

docker run --name proudcloud -v html:/var/www/html -p 80:80 -d proudcloud-hp
