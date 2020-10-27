cd ./docker
cp .env.dist .env

docker-compose -d docker-composer-yaml up -d --build

then visit localhost:8080
