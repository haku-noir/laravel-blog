<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/blog/', [PostsController::class, 'list'])
    ->name('post.list');
Route::get('/blog/create/', [PostsController::class, 'create'])
    ->name('post.create');
Route::post('/blog/create/', [PostsController::class, 'create_send'])
    ->name('post.create_send');
Route::get('/blog/update/{id}/', [PostsController::class, 'update'])
    ->name('post.update');
Route::post('/blog/update/{id}/', [PostsController::class, 'update_send'])
    ->name('post.update_send');
Route::get('/blog/confirm/{id}/', [PostsController::class, 'confirm'])
    ->name('post.confirm');
Route::get('/blog/delete/{id}/', [PostsController::class, 'delete'])
    ->name('post.delete');
Route::get('/blog/detail/{id}/', [PostsController::class, 'detail'])
    ->name('post.detail');
