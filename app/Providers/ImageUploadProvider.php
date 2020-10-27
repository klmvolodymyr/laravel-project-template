<?php

namespace App\Providers;

use App\Console\Commands\SeederImagesCommand;
use App\Entities\Image;
use App\Http\Controllers\ImagesController;
use App\Manager\ImageManager;
use App\Manager\ImageManagerInterface;
use App\Repositories\ImagesRepository;
use App\Repositories\ImagesRepositoryInterface;
use App\Services\ImageUploader;
use App\Services\ImageUploaderInterface;
use App\Services\ThumbnailIServiceInterface;
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
            'App\Repositories\ImagesRepositoryInterface',
            'App\Repositories\ImagesRepository'
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
            'App\Manager\ImageManagerInterface',
            'App\Manager\ImageManager',
        );
//
        $this->app->when(ImageManagerInterface::class)
            ->give(function () {
                $em = EntityManager::getRepository(Image::class);

                return new ImageManager($em);
            });


        $this->app->bind(
            'App\Services\ImageUploaderInterface',
            'App\Services\ImageUploader'
        );

        $this->app->bind(
            'App\Services\ThumbnailIServiceInterface',
            'App\Services\ThumbnailIService'
        );
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
