<?php

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

<<<<<<< HEAD

Route::resource('users','App\Http\Controllers\UserController');



=======
Route::get('/about', function () {
    return view('about');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create', function () {
    return view('create');
});
>>>>>>> dfc2831efc46fe294d359046c7dcce91a616836a

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
