## elk-docker-compose

Docker-compose project to get an ElasticSearch + Logstash + Kibana + Filebeat + phpfpm + Nginix +traefik+ portainer   stack up and running quickly. 
#COPY ./config/default.conf /etc/nginx/conf.d/

## Getting Started
 git clone https://github.com/haykalBR/Symfony-Elk.git

Next, navigate to the directory and run `docker-compose up --build`
## How it works?
php: This is the PHP-FPM container including the application volume mounted on,

nginx: This is the Nginx webserver container in which php volumes are mounted too,

elasticsearch: This is the Elasticsearch server used to store our web server and application logs,

logstash: This is the Logstash tool from Elastic Stack that allows to read logs and send them into our Elasticsearch server,

kibana: This is the Kibana UI that is used to render logs and create beautiful dashboards.

traefik:  Traefik is an open-source Edge Router that makes publishing your services

portainer: managing containers from a browser

This results in the following running containers:
![Screenshot from 2020-06-01 21-47-59](https://user-images.githubusercontent.com/12957189/83453023-a2de3800-a451-11ea-997a-f4db79d8c391.png)
 
## Config 

Add in hosts 

127.0.0.1 www.symfony-4-docker-dev.com

127.0.0.1 elasticsearch.com

127.0.0.1 kibana.com

127.0.0.1 portainer.com
 

![Docker](https://user-images.githubusercontent.com/12957189/83452924-7cb89800-a451-11ea-8c80-e4095e830ab4.png)


sudo docker network create --driver bridge web

DNS kol en .local 
nraka7 f conf toutes les versions
https://github.com/ypereirareis/docker-metricbeat-example/blob/master/docker/metricbeat/metricbeat.yml
hedha fih metric beat fih make zda jaw