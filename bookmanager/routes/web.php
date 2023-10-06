<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksAllController;

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
    return view('Top');
})->name('top');

Route::get('/login', [LoginController::class,'index'])->name('loginView');
Route::get('/userLogin', [LoginController::class,'showForm'])->name('login.form');
Route::post('/userLogin', [LoginController::class,'login'])->name('login');

Route::get('/admin', [AdminController::class,'index'])->name('admin');
Route::get('/booksAll', [BooksAllController::class,'index'])->name('booksAll');

// 新規登録フォーム送信時のルート
Route::post('/admin/store', [AdminController::class,'store'])->name('admin.store');
Route::post('/admin', [AdminController::class,'index'])->name('admin');
// 更新フォーム送信時のルート
Route::post('/admin/update', [AdminController::class,'update'])->name('admin.update');
// 削除フォーム送信時のルート
Route::post('/admin/destroy', [AdminController::class,'destroy'])->name('admin.destroy');

// 書籍詳細ページに遷移するときのルート
Route::get('/booksShow/{id}', [BooksAllController::class, 'booksShow'])->name('books.show');

//レビュー投稿ページに遷移するときのルート
Route::get('/reviewCreate', [BooksAllController::class, 'reviewCreate'])->name('review.create');
Route::post('/reviewCreate', [BooksAllController::class, 'reviewCreate'])->name('review.create');

//レビューを投稿するときのルート
Route::post('/reviewStore', [BooksAllController::class, 'reviewStore'])->name('review.store');