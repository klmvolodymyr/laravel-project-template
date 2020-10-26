<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/images', [ImagesController::class, 'showAll']);
//Route::get('/image', [ImagesController::class, 'showAll']);
//Route::get('/images', [ImagesController::class, 'showAll']);
