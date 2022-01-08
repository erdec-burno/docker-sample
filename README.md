## About
Sample of use Docker Compose with services nginx, php, mysql, composer.

#### Build and run your app with Compose:
> docker-compose up

Re-build your app with Compose:
> docker-compose up --build

#### Down, removing the containers.
pass _--volumes_ to also remove the data volume.
> docker-compose down --volumes

#### Rules data settings on VPS (optional)
In case, If current user is root:
> chown -R www-data:www-data /<app-dir>

> chmod 777 /<app-dir>/www/logs