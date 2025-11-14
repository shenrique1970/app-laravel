
# Setup Docker Laravel 10 com PHP 8.1
[Assine a Academy, e Seja VIP!](https://academy.especializati.com.br)

### Passo a passo
Clone Repositório
```sh
git clone -b laravel-10-com-php-8.1 https://github.com/especializati/setup-docker-laravel.git app-laravel
```
```sh
cd app-laravel
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Especializa Ti"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)


Criar controller dentro do container
```sh
php artisan make:controller "Admin\\SupportController"
```

fonte:
https://github.com/especializati/setup-docker-laravel/tree/laravel-10-com-php-8.1
https://www.youtube.com/watch?v=oz9K3jtFUvI&list=PLVSNL1PHDWvQ1N6fqhQ5HQzFtN-xrkjNU&index=4


stop containers
```
docker stop $(docker ps -q)
```
Criar model com migrations
```
php artisan make:model Support -m
```

mysql -h 127.0.0.1 -P 3388 -u root -puserpass laravel
Command 'mysql' not found, but can be installed with:
sudo apt install mysql-client-core-8.0     # version 8.0.43-0ubuntu0.22.04.2, or
sudo apt install mariadb-client-core-10.6  # version 1:10.6.22-0ubuntu0.22.04.1