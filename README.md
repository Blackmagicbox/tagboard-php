# tagboard-php
Simple Shoutbox project to experiment with **Dockerized LEMP** stack.

## Instructions

* After cloning the repo to your machine, run the command ```sh init-files.sh``` on the project's root folder.
That script will generate the access and error log files for your **Nginx server**

* After running the init script, run ```docker-compose build && docker-compose up```

* To check if all the containers are running fine, run ```docker-compose ps```
You should see something like this for output:
```
         Name                        Command               State               Ports             
   --------------------------------------------------------------------------------------------------
   tagboard-php_mysql_1       docker-entrypoint.sh mysqld      Up      0.0.0.0:3306->3306/tcp        
   tagboard-php_nginx_1       nginx -g daemon off;             Up      0.0.0.0:80->80/tcp            
   tagboard-php_phpfpm_1      docker-php-entrypoint php-fpm    Up      9000/tcp                      
   tagboard-php_phpmadmin_1   /run.sh supervisord -n -j  ...   Up      0.0.0.0:8080->80/tcp, 9000/tcp
```