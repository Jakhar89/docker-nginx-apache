#!/bin/bash 

cd possinow/
kubectl apply -f php-deployment.yaml
sleep 2
kubectl apply -f php-service.yaml

sleep 5

cd ../mysql/
kubectl apply -f mysql-deployment.yaml
sleep 2
kubectl apply -f phpmyadmin-deployment.yaml

sleep 5

cd ../
kubectl apply -f possinow-service.yaml
