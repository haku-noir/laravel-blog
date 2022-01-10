<?php

use App\Http\Controllers\PostsController;
Route::get('/blog/', [PostsController::class, 'list'])
->middleware(['auth'])->name('post.list');
Route::get('/blog/create/', [PostsController::class, 'create'])
->middleware(['auth'])->name('post.create');
Route::post('/blog/create/', [PostsController::class, 'create_send'])
->middleware(['auth'])->name('post.create_send');
Route::get('/blog/update/{id}/', [PostsController::class, 'update'])
->middleware(['auth'])->name('post.update');
Route::post('/blog/update/{id}/', [PostsController::class, 'update_send'])
->middleware(['auth'])->name('post.update_send');
Route::get('/blog/confirm/{id}/', [PostsController::class, 'confirm'])
->middleware(['auth'])->name('post.confirm');
Route::get('/blog/delete/{id}/', [PostsController::class, 'delete'])
->middleware(['auth'])->name('post.delete');
Route::get('/blog/detail/{id}/', [PostsController::class, 'detail'])
->middleware(['auth'])->name('post.detail');

require __DIR__.'/auth.php';
