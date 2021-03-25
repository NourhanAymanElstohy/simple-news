<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/newses', [NewsController::class, 'index'])->name('news.index');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('comments/{comment_id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comments/{comment_id}', [CommentController::class, 'destroy'])->name('comments.destroy');
});
