<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\BookController;

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

    
Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::post('/store-reg',[AuthController::class, 'storeRegist'])->name('storeRegist');
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'LoginStore'])->name('login.auth');

Route::post('/store', [MassageController::class, 'storeMassage'])->name('store');

Route::get('/main', function () {
   return view('layouts.master');
});


Route::get('/book', function () {
    return view('dashboard.book');
});
Route::get('/category', function () {
    return view('dashboard.category');
});

Route::get('/rentLog', function () {
    return view('dashboard.rentLog');
});
// Route::get('user', function () {
//     return view('dashboard.user');
// });
Route::get('/users',[AdminController::class, 'indexUsers'])->middleware('admin')->middleware('auth')->name('users');

Route::post('/login-store',[AuthController::class,'LoginStore'])->name('loginStore');

Route::get('/dashboard',[AdminController::class,'index'])->middleware('auth');

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/editUser/{id}', [AdminController::class, 'indexEditUser'])->name('indexEditUser');
Route::post('/update/{id}', [AdminController::class, 'updateIndex'])->name('updateIndex');
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete'); 

Route::get('/book', [BookController::class, 'book'])->name('book');
Route::get('/form', [BookController::class, 'form']);
Route::post('/book', [BookController::class, 'add'])->name('add');
Route::get('/book/form', [BookController::class, 'form'])->name('form');