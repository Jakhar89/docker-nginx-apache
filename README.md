# docker-nginx-apache
docker with nginx reverse proxy to get multiple containers (Apache) exposed on host machine PORT 80

##ABOUT APP
- This is written particularly to cater running of mutiple instances of same Codeigniter2.x based app
- Root Docker image named possimg runs on Apache and PHP 7.0.33, and mounts the /www folder to the root
- /possiupgrade Dockerfile image name possi72 fire up Apache and PHP 7.2, and mounts the same folder
- /ngix docker-compose runs a ngix-proxy server to cater the need of both apps to be exposed on port 80 of host machine.

##PRE-REQUISITES
**DOCKER installed on machine**
**Need a compatible in a www folder besides root folder /or at the same level of the repo folder**
------- user/docker
------- user/www
**Each  ##docker-compose.yml file ##Virtual-Host name should be added to the machine hosts file
-------- sudo nano /etc/hosts    ----- Command for Mac

#Commands
**-----from within the folder of Dockerfile ---- to build up the image and run container -----**
Run below at root level inside repo, /ngix, and /possiupgrade
*docker-compose up --build*

##Check
**docker network ls** ------- ##ngix_default *should be there ofr nginx proxy to resolve the name/ip:port to provide container*

##General Commands
*docker images* --- Provide all images
*docker container ls* --- all live containers
*docker container ls -a* ---- all containers live or stopped/exited

