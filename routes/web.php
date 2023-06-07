<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CreateArticlePageController;
use App\Http\Controllers\SignInPageController;
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
    return view('welcomePage');
});

Route::get('/categories', [CategoriesController::class, 'show']);

Route::get('/categories/{categoryName}', [ArticlesController::class, 'show']);

Route::get('/categories/{categoryName}/{articleId}', [ArticleController::class, 'show']);

Route::get('/create', [CreateArticlePageController::class, 'index']);

Route::get('/signin', [SignInPageController::class, 'index']);

Route::get('/about', [AboutPageController::class, 'index']);
