#!/bin/sh

docker build -t proudcloud-hp .
docker run --name proudcloud -v `pwd`/html:/var/www/html -p 80:80 -d proudcloud-hp
