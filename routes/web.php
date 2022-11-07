<?php

use App\Http\Controllers\Tweet\CreateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tweet\IndexController;
use App\Http\Controllers\Tweet\Update\IndexController as UpdateIndexController;
use App\Http\Controllers\Tweet\Update\PutController;

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

// tweetを表示する
Route::get('/tweet', IndexController::class)->name('tweet.index');

// tweetを投稿する
Route::post('/tweet/create', CreateController::class)->name('tweet.create');

// tweetを更新する
Route::get('/tweet/update/{tweetId}', UpdateIndexController::class)->name('tweet.update.index');
Route::put('/tweet/update/{tweetId}', PutController::class)->name('tweet.update.put');
