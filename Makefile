setup:
	@make build
	@make up 
	@make composer-update
build:
	docker-compose build --no-cache
stop:
	docker-compose stop
up:
	docker-compose up
composer-update:
	docker exec laravel_docker bash -c "composer update"
data:
	docker exec laravel_docker bash -c "php artisan migrate"
	docker exec laravel_docker bash -c "php artisan db:seed"