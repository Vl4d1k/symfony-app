up:
	docker-compose up -d

down:
	docker-compose down

rebuild:
	docker-compose down -v --remove-orphans
	docker-compose rm -vsf
	docker-compose up -d --build

php-cli-exec:
	docker exec -it symfony_php_1 /bin/sh

db:
	docker-compose exec php ./bin/console doctrine:database:drop --force
	docker-compose exec php ./bin/console doctrine:database:create
	docker-compose exec php ./bin/console doctrine:migrations:migrate -n

