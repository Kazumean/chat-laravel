<?php

use App\Http\Controllers\Tweet\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tweet\IndexController;

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

Route::get('/tweet', IndexController::class)->name('tweet.index');

Route::post('/tweet/create', CreateController::class)->name('tweet.create');
