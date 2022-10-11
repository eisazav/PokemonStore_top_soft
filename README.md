# Pokemon Store

## Docker
``` sh
$ cd pokemonstore
$ docker-compose build app
$ docker-compose up -d
$ docker-compose exec app php artisan migrate
$ docker-compose exec app php artisan db:seed
```

## Notes
- [How To Install and Set Up Laravel with Docker Compose on Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04#step-4-setting-up-nginx-configuration-and-database-dump-files)