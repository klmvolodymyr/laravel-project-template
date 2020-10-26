<?php

namespace App\Providers;

use App\Services\ImageUploaderInterface;
use Illuminate\Support\ServiceProvider;

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

//        $this->app->singleton(Connection::class, function ($app) {
//            return new Connection(config('riak'));
//        });
        //
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
