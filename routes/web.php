<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

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



Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [PostController::class, 'index'])->name('home');   // all posts
    Route::get('user/{id}', 'UserController@show');                                        // posts by tag
    Route::get('tag/{id}', 'TagController@show');                                          // posts by user

    // posts resource
    Route::resource('post', PostController::class, ['except' => 'show', 'index']);
    Route::get('post/{post}/delete', ['as' => 'post.delete', 'uses' =>'PostController@delete']);
    Route::get('{slug}', ['as' => 'post.show', 'uses' => 'PostController@show']);

});

Auth::routes();
