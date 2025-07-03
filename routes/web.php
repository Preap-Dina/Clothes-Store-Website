<?php

use App\Http\Controllers\BackController\CategoryController;
use App\Http\Controllers\BackController\LogoController;
use App\Http\Controllers\BackController\ProductController;
use App\Http\Controllers\BackController\UserController;
use App\Http\Controllers\FrontController\ProductController as FrontControllerProductController;
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

Route::controller(FrontControllerProductController::class)->group(function(){
    Route::get('/', 'home');
    Route::get('/product-detail/{product}', 'productDetail')->name('productDetail');
    Route::get('/shop', 'shop')->name('shop');
});


Route::get('/news', function(){
    return view('frontend.news');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/signup-submit', 'signupSubmit')->name('signupSubmit');
    Route::post('/login-submit', 'loginSubmit')->name('loginSubmit');
    Route::get('/logout', 'logout')->name('logout');    
});

Route::get('/admin/dashboard', [UserController::class, 'dashBoard'])
        ->middleware('auth')
        ->name('dashBoard');

Route::middleware(['auth'])->group(function () {
    Route::controller(ProductController::class)->group(function(){
        Route::get('/admin/list-product', 'listProduct');   
        Route::get('/admin/add-product', 'addProduct');
        Route::post('/admin/add-product-submit', 'addProductSubmit');
        Route::post('/admin/delete-product', 'deleteProduct')->name('deleteProduct');
        Route::get('/admin/edit-product/{product}', 'editProduct')->name('editProduct');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/list-category', 'listCategory');
        Route::get('/admin/add-category', 'addCategory')->name('addCategory');
        Route::post('/admin/add-category-submit', 'addCategorySubmit');
        Route::get('/admin/edit-category/{category}', 'editCategory')->name('editCategory');
        Route::post('/admin/delete-category', 'deleteCategory')->name('deleteCategory');
    });

    Route::controller(LogoController::class)->group(function(){
        Route::get('/admin/change-logo', 'changeLogo')->name('changeLogo');
        Route::post('/admin/change-logo-submit', 'changeLogoSubmit')->name('changeLogoSubmit');
    });
});



