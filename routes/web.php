<?php

use App\Http\Controllers\PostsController;
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

Route::get('/content', [PostsController::class, 'content'])->name('post.index');
Route::get('/', [PostsController::class, 'listPost'])->name('post.list');

Route::get('/create', [PostsController::class, 'create'])->name('post.create');
Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('post.edit');

Route::post('/store', [PostsController::class, 'store'])->name('post.store');
Route::post('/update/{id}', [PostsController::class, 'update'])->name('post.update');
Route::delete('/delete/{id}', [PostsController::class, 'delete'])->name('post.delete');
Route::get('/find/{id}', [PostsController::class, 'show'])->name('post.show');

