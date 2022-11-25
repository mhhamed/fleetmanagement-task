docker compose up --build -d
docker-compose run --rm composer install
cd src
cp .env.example .env
php artisan key:generate
php artisan jwt:secret
cd ..
docker  exec -it php_task php artisan migrate:fresh --seed
echo http://localhost:8080