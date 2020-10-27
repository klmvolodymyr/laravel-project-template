## Image processing backend service.
###### Requirements php7.4, mysql5.7+



##########################
### Install ###
##########################
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
```
php artisan test

   PASS  Tests\Feature\GerAllAcitveImagesTest
  ✓ show all images

  Tests:  1 passed <--- Yeah! It works! Congratulations!
  Time:   0.44s

```

##########################
#### Yeah! It works! Congratulations!
##########################



#####################
#### Application ####
#####################
```
We have two channels to interact with application:
  1) Using CLI. 
  2) Using REST API.
```

##########################
#### CLI
##########################

Run ` php artisan` to see all availabe list of commands.

Under tha "app" chapter you should see list of image-service application context commands. 
```
 app
  app:images:seed  This command process unzipped images. Resize, crop and creates thumbnails from fetched images, than storing processed results in database.
  app:images:unzip Unzip providen archive with photos for seeding.
```


##########################
##### UnzipPhotos Command  
##########################

```
  Command prepears zip archive with photos to seed into the database.

Usage:
  app:images:unzip [options]

Options:
      --archPath[=ARCHPATH]    Archive --archPath=storage/app/public/task-images.zip 
      --extractTo[=EXTRACTTO]  Storage folder for storing fetched images  '--extractTo=--archPath=storage/app/public/tasks-images'
```

Example:
```
    php artisan app:images:unzip  --archPath=storage/app/public/task-images.zip  --extractTo=--archPath=storage/app/public/tasks-images
```


##########################
##### Seed Command  
##########################

` php artisan app:images:seed --help`

```
Description:
  Please use this command to Fill database with new images.

Usage:
  app:images:seed

```

Use ` php artisan serve` to run api webserver.

`php artisan route:list`  
``` 
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
| Domain | Method   | URI                     | Name | Action                                              | Middleware |
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
|        | POST     | api/image/upload        |      | App\Http\Controllers\ImageUploaderController@upload | api        |
|        | DELETE   | api/image/{id}          |      | App\Http\Controllers\ImagesController@deleteImage   | api        |
|        | PATCH    | api/image/{id}/favorite |      | App\Http\Controllers\ImagesController@addToFavorite | api        |
|        | PATCH    | api/image/{id}/restore  |      | App\Http\Controllers\ImagesController@restore       | api        |
|        | GET|HEAD | api/image/{id}/show     |      | App\Http\Controllers\ImagesController@show          | api        |
|        | GET|HEAD | api/images              |      | App\Http\Controllers\ImagesController@showAll       | api        |
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
```
