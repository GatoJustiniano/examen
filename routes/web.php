<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WebController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\CategoryController;

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

Route::view('/about-us', 'about-us');


Route::resource('dashboard/post', PostController::class);
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');

//route para cargar image con ckeditor
Route::post('dashboard/post/content_image', [PostController::class, 'contentImage']);

Route::resource('dashboard/category', CategoryController::class);
Route::resource('dashboard/user', UserController::class);

Route::get('/contact', [WebController::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebController::class, 'index'])->name('index');

Route::get('/diagrama-modelo-c4', [WebController::class, 'diagrama'])->name('diagrama'); //mostrar diagrama
