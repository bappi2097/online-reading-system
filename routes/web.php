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

auth()->logout();

Route::prefix('adminlte')->name('adminlte.')->group(function () {
    Route::get('login', function () {
        return view('admin.auth.login');
    });
    Route::get('register', function () {
        return view('admin.auth.register');
    });
    Route::name('auth.')->group(function () {
        Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('login');
        Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('register');
        Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('register');
    });
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});


Route::get("/", function () {
    return view("body");
});

Route::get("/blog", function () {
    return view("blog");
});

Route::get("/category", function () {
    return view("category");
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
