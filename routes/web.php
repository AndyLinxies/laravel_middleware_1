<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Models\Article;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $articles =Article::all();
    return view('pages.article',compact('articles'));
})->middleware('toArticles');

Route::resource('/dashboard/articles', ArticleController::class)->middleware('roles');

//on retourne la view show quand on clique sur la le tritre de l'article sans passer par le dashboard
Route::get('/articles/{id}', function ($id) {
    $article =Article::find($id);
    return view('pages.back.showArtices',compact('article'));
});

//users dans le dashboard accessible que pour l'admin
Route::get('/dashboard/users',[UserController::class,'index'])->middleware('administrateur');

////Voir middleware roles. Si on est admin on peut aller sur le dashboard,sinon on ne peut pas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','roles'])->name('dashboard');

require __DIR__.'/auth.php';
