## About
Sample of use Docker Compose with services nginx, php, mysql, composer.

#### Build and run your app with Compose:
> docker-compose up

Re-build your app with Compose:
> docker-compose up --build

####Down, removing the containers.
pass _--volumes_ to also remove the data volume.
> docker-compose down --volumes