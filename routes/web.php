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

Route::get('posts',[PostsController::class,'index'])->name('posts.index');
Route::get('posts/create',[PostsController::class,'create'])->name('posts.create');
Route::post('posts/',[PostsController::class,'store'])->name('posts.store');
Route::get('posts/{post}',[PostsController::class,'show'])->name('posts.show');
Route::get('posts/{post}/edit',[PostsController::class,'edit'])->name('posts.edit');
Route::put('posts/{post}',[PostsController::class,'update'])->name('posts.update');
Route::delete('posts/{post}',[PostsController::class,'destroy'])->name('posts.destroy');
Route::get('posts-trash',[PostsController::class,'trash'])->name('posts.trash');
Route::get('restore/{id}',[PostsController::class,'restore'])->name('posts.restore');