<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

//route FE
// Route::get('/dashboard', function () {
// return view('dashboard.index');
// });

//route pake middleware
Route::get ('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin');


// Route::get('/user', function () {
//     return view('dashboard.user');
// });
Route::get('/users', [AdminController::class,'indexUsers'])->middleware('admin');

Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});
Route::get('/rent-log', function () {
    return view('dashboard.rent-logs');
});

//message
Route::post('/store', [MessageController::class, 'storeMessage'])->name('store');
//route register
Route::get('/index-register',[AuthController::class,'indexRegister'])->name('register');
Route::post('/registerStore',[AuthController::class,'storeRegister'])->name('registerStore');

//route login
Route::get('/login',[AuthController::class,'indexLogin'])->name('login');
Route::post('/loginStore',[AuthController::class,'auth'])->name('auth');

//route admin
Route::get('/user', [AdminController::class, 'indexUsers'])->name('indexUser')->middleware('admin')->middleware('auth');
Route::get('/editUser/{id}', [AdminController::class, 'indexEditUser'])->name('indexEditUser');
Route::post('/updateE/{id}', [AdminController::class, 'updateIndex'])->name('updateIndex');
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//ROUTE USER
Route::get('/adminuser', function (){
    return view('user.index');
})->middleware('auth');
Route::get('/home', [UserController::class, 'index'])->name('index')->middleware('user')->middleware('auth');

//route book
Route::get('/book', [BookController::class, 'book'])->name('book');
Route::get('/add', [BookController::class, 'form']);
Route::get('/edit', [BookController::class, 'edit']);
Route::put('/edit', [BookController::class, 'update']);
Route::post('/book', [BookController::class, 'add'])->name('add');
Route::delete('/delete/{id}', [BookController::class, 'destroy']);