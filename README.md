# Docker-Nginx-Apache-MySql
docker with nginx reverse proxy to get multiple containers (Apache) exposed on host machine PORT 80

## ABOUT APP
- This is written particularly to cater running of mutiple instances of same Codeigniter2.x based app
- Root Docker image named possimg runs on Apache and PHP 7.0.33, and mounts the /www folder to the root
- /possiupgrade Dockerfile image name possi72 fire up Apache and PHP 7.2, and mounts the same folder
- /ngix docker-compose runs a ngix-proxy server to cater the need of both apps to be exposed on port 80 of host machine.
*If database is Container/Kubernetes* - use **Container/Deployment Name as db host**
*If database is outside Docker/Kubernetes* - use **host.docker.internal as db host**


## PRE-REQUISITES
**DOCKER installed on machine**
**Need a compatible in a www folder inside root folder**  
------- user/docker  
------- docker/www 
**Each  *docker-compose.yml* file ##Virtual-Host name should be added to the machine hosts file  
```bash
sudo nano /etc/hosts    
```
----- Command for Mac

# Commands
**-----from within the folder of Dockerfile ---- to build up the image and run container -----**  
Run below at root level inside repo, /ngix,/possinow  and /possiupgrade  
```bash
docker build . -t <name of image>
docker-compose up
```
*Mysql Server*
```bash
docker-compose up
```
--- as it pulls image from cloud

## Check  
```bash
docker network ls
```
------- ##ngix_default *should be there ofr nginx proxy to resolve the name/ip:port to provide container*  

## General Commands  
```bash
docker images --- Provide all images  
docker container ls --- all live containers  
docker container ls -a ---- all containers live or stopped/exited  
```
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Kubernetes

## Useful Links and Commands
*Ingress Nginx controller* more info on [setup](https://kubernetes.github.io/ingress-nginx/deploy/) for other than Docker for Mac

*[Web](https://kubernetes.io/docs/tasks/access-application-cluster/web-ui-dashboard/) UI for kubernetes*

``bash 
#Install Nginx Ingress controller on Docker for Mac app
kubectl apply -f https://raw.githubusercontent.com/kubernetes/ingress-nginx/controller-0.31.1/deploy/static/provider/cloud/deploy.yaml

kubectl get pods -n kube-system #check if ingress controller is running nginx
``

## PRE-REQUISITES
**Kubernetes installed on machine**

Convert **docker-compose.yml** to Kubernetes deployment and Service files

## Install Kompose
```bash
# Linux
curl -L https://github.com/kubernetes/kompose/releases/download/v1.21.0/kompose-linux-amd64 -o kompose

# macOS
curl -L https://github.com/kubernetes/kompose/releases/download/v1.21.0/kompose-darwin-amd64 -o kompose

# Windows
curl -L https://github.com/kubernetes/kompose/releases/download/v1.21.0/kompose-windows-amd64.exe -o kompose.exe

chmod +x kompose
sudo mv ./kompose /usr/local/bin/kompose
```

## Convert
*Go to folder where **docker-compose.yml** is placed.*

```bash
kompose convert
```
*To deploy APP and Configure services related to the app*

```bash
kubectl apply -f <output file>
```

More info regarding [Kompsose](https://kubernetes.io/docs/tasks/configure-pod-container/translate-compose-kubernetes/)

*Files in root are example of Kubernetes files converted from Docker files*

/Dockerfile --> To create image used by **docker-compose**  
/docker-compose.yml --> **php-deployment.yaml , php-service.yaml**  





