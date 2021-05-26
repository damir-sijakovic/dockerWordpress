#!/bin/bash

declare -ir FALSE=0
declare -ir TRUE=(!FALSE)
PRESS_ANY_KEY=$'  This will install (or re-install) Wordpress installation, rebuild docker compose and reset file permissions.\n  Press any key to continue...\n'

echo "  DSIJAK: APACHE + PHP7.1.3 + DOCKER + WORDPRESS INSTALL"

read -n 1 -s -r -p "$PRESS_ANY_KEY"



WORK_DIR=$(pwd);
DOCKER_DIR=$WORK_DIR'/docker';
PHP_DIR=$WORK_DIR'/project';
DOCKER_COMPOSE_FILE=$WORK_DIR'/docker-compose.yml';

if ! command -v composer &> /dev/null
then
  echo "Composer command not found! Please install Composer!"
  exit
fi


if [ -d $PHP_DIR'/wordpress' ]; then

    echo "  DSIJAK: Deleting Wordpress directory..." &&
    sudo rm -r $PHP_DIR'/wordpress' &&   
    echo "  DSIJAK: Install Wordpress via Composer..." &&
    composer install --working-dir="$PHP_DIR" &&  
    sudo cp $PHP_DIR'/wp-config-dsijak.php' $PHP_DIR'/wordpress/wp-config.php' &&
    echo "  DSIJAK: Running docker-compose build..." &&
    sudo docker-compose -f $DOCKER_COMPOSE_FILE build &&
    echo "  DSIJAK: sudo chmod -R 777, to change sub-directory permissions for all users..." &&
    sudo chmod -R 777 $WORK_DIR &&
    echo "  DSIJAK: Done! "  
         
else 

    echo "  DSIJAK: Install Wordpress via Composer..." &&
    composer install --working-dir="$PHP_DIR" &&  
    sudo cp $PHP_DIR'/wp-config-dsijak.php' $PHP_DIR'/wordpress/wp-config.php' &&
    echo "  DSIJAK: Running docker-compose build..." &&
    sudo docker-compose -f $DOCKER_COMPOSE_FILE build &&
    echo "  DSIJAK: sudo chmod -R 777, to change sub-directory permissions for all users..." &&
    sudo chmod -R 777 $WORK_DIR &&
    echo "  DSIJAK: Done! "  
    
fi



