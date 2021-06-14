<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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
    return view('layout.home');
});
//Route::get('/home', function () {
//    return view('product.list');
//});
Route::get('/home', [ProductController::class, 'index'])->name('product.list');
//Route::get('/list', [ProductController::class, 'index'])->name('product.list');
Route::get('/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/add', [ProductController::class, 'store'])->name('product.store');
Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/{id}/edit', [ProductController::class, 'update'])->name('product.update');
Route::post('/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login');

