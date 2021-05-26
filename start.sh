#!/bin/bash

echo "  DSIJAK: APACHE + PHP7.4 + DOCKER + WORDPRESS INSTALL"
echo "  DSIJAK: Server is at localhost:7070"
echo "  DSIJAK: phpMyAdmin is at localhost:8080"
    
WORK_DIR=$(pwd);
DOCKER_DIR=$WORK_DIR'/docker';
PHP_DIR=$WORK_DIR'/project';

echo "  DSIJAK: Starting docker..."
docker-compose up
