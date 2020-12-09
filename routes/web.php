<?php

use Illuminate\Http\Request;
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

// auth()->logout();
Route::prefix('adminlte')->name('adminlte.')->group(function () {
    Route::name('auth.')->group(function () {
        Route::get('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showAdminLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'adminLogin'])->name('login');
        Route::post('logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('logout');
        // Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('register');
        // Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('register');
    });
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        Route::name('auth.')->group(function () {
            Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('register');
            Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('register');
        });
        Route::prefix('news-category')->name('news-category.')->group(function () {
            Route::get('/', [App\Http\Controllers\NewsCategoryController::class, 'index'])->name('index');
            Route::get('create', [App\Http\Controllers\NewsCategoryController::class, 'create'])->name('create');
            Route::post('/', [App\Http\Controllers\NewsCategoryController::class, 'store'])->name('store');
            Route::get('edit/{news_category}', [App\Http\Controllers\NewsCategoryController::class, 'edit'])->name('edit');
            Route::put('/{news_category}', [App\Http\Controllers\NewsCategoryController::class, 'update'])->name('update');
            Route::get('/{news_category}', [App\Http\Controllers\NewsCategoryController::class, 'show'])->name('show');
            Route::delete('/{news_category}', [App\Http\Controllers\NewsCategoryController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('tag')->name('tag.')->group(function () {
            Route::get('/', [App\Http\Controllers\TagController::class, 'index'])->name('index');
            Route::get('create', [App\Http\Controllers\TagController::class, 'create'])->name('create');
            Route::post('/', [App\Http\Controllers\TagController::class, 'store'])->name('store');
            Route::get('edit/{tag}', [App\Http\Controllers\TagController::class, 'edit'])->name('edit');
            Route::put('/{tag}', [App\Http\Controllers\TagController::class, 'update'])->name('update');
            Route::get('/{tag}', [App\Http\Controllers\TagController::class, 'show'])->name('show');
            Route::delete('/{tag}', [App\Http\Controllers\TagController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('news')->name('news.')->group(function () {
            Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('index');
            Route::get('create', [App\Http\Controllers\NewsController::class, 'create'])->name('create');
            Route::post('/', [App\Http\Controllers\NewsController::class, 'store'])->name('store');
            Route::get('edit/{news}', [App\Http\Controllers\NewsController::class, 'edit'])->name('edit');
            Route::put('/{news}', [App\Http\Controllers\NewsController::class, 'update'])->name('update');
            Route::get('/{news}', [App\Http\Controllers\NewsController::class, 'show'])->name('show');
            Route::delete('/{news}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('destroy');
        });
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
