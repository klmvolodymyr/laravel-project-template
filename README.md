### Image processing-service.
#### This service serve RESTFull api backend which used by SPA application.
###### Requirements php7.4, mysql5.7+


#### Install ###
##### 1. Clone the repository. ###
` git clone https://github.com/vkquant/12man.git`
##### 2. Create .env file.  ###
` cp .env.example .env`
##### 3. Download vendors.  ###
`composer install --no-cache`
##### 4. Fetch database migrations.  ###
`php artisan migrate:install` or `php artisan migrate:refresh` to reset database.
######## 5. Test  ####
Run `php artisan test` to validate application state.


## Read more about below: 
- [SETUP](https://github.com/vkquant/12man/blob/master/docs/00-setup)
- [CLI](https://github.com/vkquant/12man/blob/master/docs/01-cli.md)
- [API](https://github.com/vkquant/12man/blob/master/docs/02-api.md)
- [TESTING](https://github.com/vkquant/12man/blob/master/docs/03-tests.md)
- [RUN & DEPLOY](https://github.com/vkquant/12man/blob/master/docs/04-run.md)
- [DOCKER](https://github.com/vkquant/12man/blob/master/docs/05-docker.md)
