<?php

namespace App\Providers;

use App\Console\Commands\SeederImagesCommand;
use App\Entities\Image;
use App\Http\Controllers\ImagesController;
use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use App\Repositories\ImagesRepository;
use App\Repositories\ImagesRepositoryInterface;
use App\Services\ImageUploaderInterface;
use Illuminate\Support\ServiceProvider;
use LaravelDoctrine\ORM\Facades\EntityManager;

/**
 * Class ImageUploadProvider
 *
 * @package App\Providers
 */
class ImageUploadProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\ImageUploaderInterface',
            'App\Services\ImageUploader'
        );


        $this->app->bind(
            'App\Repositories\ImagesRepository',
            function ($app) {
                return new ImagesRepository(
                    $app['em'],
                    $app['em']->getClassMetaData(Image::class)
                );
        });

        $this->app->bind(
            'App\Repositories\ImagesRepositoryInterface',
            'App\Repositories\ImagesRepository'
        );

        $this->app->bind(
            'App\Manager\ImageManager',
            function () {
                return new ImageManager(
                    EntityManager::getRepository(Image::class)
                );
            }
        );

        $this->app->bind(
            'App\Manager\ImageManagerInterface',
            'App\Manager\ImageManager',

        );


//        $this->app->when(ImageManagerInterface::class)
//            ->give(function () {
//
//                $em = EntityManager::getRepository(Image::class);
//
//                return new ImageManager($em);
//            });


////sss
//        $this->app->when(ImagesController::class)
//            ->needs(\App\Repositories\ImagesRepository::class)
//            ->give(function(){
//                return new \App\Repositories\ImagesRepository (
//                    EntityManager::getRepository(Image::class)
//                );
//            })
//        ;

//        $A = $this->app->get('em');
//        $em =  $this->app->get('em');
//        $B =  $app['em']->getClassMetaData(Image::class);
//
//        $this->app->when(
//            ImagesRepositoryInterface::class, function($app) {
//            // This is what Doctrine's EntityRepository needs in its constructor.
//            return new \App\Repositories\ImagesRepository(
//                $app['em'],
//                $app['em']->getClassMetaData(Image::class)
//            );
//        });
//
//
//        $this->app->singleton('App\Repositories\ImagesRepository', function ($app) {
//            return new \App\Repositories\ImagesRepository(
//                $app['em'],
//                $app['em']->getClassMetaData(\App\Entities\Image::class)
//            );
//        });
//
//        $this->app->when(ImagesController::class)
//            ->needs(\App\Manager\ImageManager::class)
//            ->give(function(){
//                return new \App\Manager\ImageManager (
//                    EntityManager::getRepository(Image::class)
//                );
//            });

//        $this->app->when(ImagesController::class)
//            ->needs(\App\Repositories\ImagesRepository::class)
//            ->give(function($app){
//                return new \App\Repositories\ImagesRepository(
//                    $app['em'],
//                    $app['em']->getClassMetaData(Image::class)
//                );
//            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
