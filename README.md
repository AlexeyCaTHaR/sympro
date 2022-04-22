# TODO list

- ~~log~~
- ~~symfony debug panel~~
- ~~user model~~
- auth with jwt
- vue app = personal
- event handler
- value resolver
- console command

# sympro

Symfony project

docker-compose up -d --build

docker-compose exec php /bin/bash

### Make entity

symfony console make:entity Quote creating fields

### Make entity migration and apply

symfony console make:migration

symfony console doctrine:migrations:migrate

### Make fixture and apply

symfony console make:fixture QuoteFixture

symfony console doctrine:fixtures:load

### Make controller

symfony console make:controller QuoteController

-----DB------------ mysql -u root -p symfony_docker
-------------------


composer require-dev symfony/debug