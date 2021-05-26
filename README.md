# Docker with Wordpress 

## Docker compose with:
* Apache v2.4.38 (Debian)
* PHP v7.4
* MariaDB latest
* Wordpress ^5.7

## install.sh
This script will install or re-install:

* docker-compose build
* composer install johnpbloch/wordpress  

## Running:
Run `start.sh` or manually, in root (where `docker-compose.yml` file is) run:
        
        docker compose up


## Project ports        

* localhost:7070 - Wordpress
* localhost:8080 - phpMyAdmin 

## File permissions issues
Run `fix_permissions.sh`.

## Other PHP versions
In `Dockerfile` un-comment other PHP versions and run `install.sh`.


## MariaDB Access
user: `dsijakWordpress`          
pass: `dsijakWordpress`      


## Make ports 7070 and 8080 accessable from localhost only
Run:    
`sudo ./firewall_ports.sh` 




## Created/tested with:
5.4.118-1-MANJARO/xfce4, docker, portainer.


## Have Fun!

