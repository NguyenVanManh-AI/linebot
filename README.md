# Docker Linebot
# Version 2.0 
```bash
rename file .env.example to .env in folder contents 
```
```bash
docker-compose up --build 
```
## Goto : 
- API     : http://localhost:99
- Client  : http://localhost:8089
- Swagger : http://localhost:7777/api/documentation

## Using PHPunit 
```bash
docker exec -it app sh
php artisan test 
php artisan test --filter UserLoginFeatureTest
php artisan test --filter UserServiceUnitTest
```
## Using PHPstan 
```bash
docker exec -it app sh
composer analyze
composer analyze-min
composer baseline
```
## Using Rector  
```bash
docker exec -it rector sh 
cd tools/rector
composer rector-dry
composer rector-process
```
## Using Swagger  
- http://localhost:7777/api/documentation


-------------------------------------------------------------------------------------
# version 1.0
## Step by Step
```bash
rename file .env.example to .env in folder contents 
```
```bash
docker-compose up -d --build 
```
```bash
docker-compose run --rm composer install 
```
```bash
docker-compose run --rm npm install 
```
```bash
docker exec -it linebot-rector-1 sh 
cd tools/rector 
composer install
exit 
```
```bash
docker exec -it l5-swagger-app sh
php artisan optimize:clear 
exit   
```
```bash
docker-compose run --rm artisan optimize:clear
docker-compose run --rm artisan optimize
docker-compose run --rm artisan migrate:refresh --seed
docker-compose up -d --build 
```
## Goto : 
- API     : http://localhost:99
- Client  : http://localhost:8089
- Swagger : http://localhost:7777/api/documentation

## Using PHPunit 
```bash
docker-compose run --rm artisan test 
docker-compose run --rm artisan test --filter UserLoginFeatureTest
docker-compose run --rm artisan test --filter UserServiceUnitTest
```
## Using PHPstan 
```bash
docker-compose run --rm composer analyze
docker-compose run --rm composer analyze-min
docker-compose run --rm composer baseline
```
## Using Rector  
```bash
docker exec -it linebot-rector-1 sh 
cd tools/rector
composer rector-dry
composer rector-process
```

## Using Swagger  
- http://localhost:7777/api/documentation
