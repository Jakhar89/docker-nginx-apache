#!/bin/bash 
function sleeper(){
   i=1
   while [ $i -le $1 ] 
   do 
     echo -n '-';
     sleep 0.1
     ((i++))
   done
   echo 'Next Installation . . . . .'
}
cd ngix/
docker-compose up --no-start  && sleeper 100

cd ../mysql/
docker-compose up --no-start  && sleeper 100

cd ../possinow/
docker-compose up --no-start  && sleeper 100
