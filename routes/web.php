<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('aboutUs');
})->name('about');

Route::get('/create_article', function () {
   return view('create_article');
})->name('create-article');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::post('/article-create', [\App\Http\Controllers\ArticleController::class, 'store']);


