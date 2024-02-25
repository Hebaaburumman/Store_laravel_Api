<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SignupController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


//signup

Route::get('/', [SignupController::class, 'show'])->name('signup.show');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');
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

// Route::get('/', function () {
//     return view('welcome');
// });


///login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.check');


///forget password

// Show the password reset request form
Route::get('/forgot-password', [ForgotPasswordController::class, 'show'])->name('password.request');

// Handle the password reset request
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::get('/products', [ProductController::class, 'index'])->name('products.list');
Route::get('/product', [ProductController::class, 'show'])->name('products.show');


Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
// Route::get('/search',  [ProductController::class, 'search'])->name('search');


//user
Route::get('/users', [UserController::class, 'list'])->name('users.list');


Route::post('/users', [UserController::class, 'store'])->name('user.store');


// Show the user update form
Route::get('/users/{Id}/edit', [UserController::class, 'edit'])->name('user.edit');

// Update the user details
Route::put('/users/{Id}/update', [UserController::class, 'update'])->name('user.update');



Route::get('/users/create', [UserController::class, 'create'])->name('users.create');


/// category 

Route::get('/categories', [CategoryController::class, 'list'])->name('categories.list');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');

// Delete Category
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/categories/confirm-delete/{id}', [CategoryController::class, 'destroy'])->name('categories.confirm-delete');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.list');

Route::get('/products-by-category', [DashboardController::class, 'productsByCategory']);

// Route::get('/dashboard', [DashboardController::class, 'list'])->name('dashboard.list');

Route::middleware(['auth'])->group(function () {
    Route::delete('users/{id}', [userController::class, 'destroy'])->name('users.destroy');
});

Route::patch('/remove-one-quantity/{id}', [ProductController::class,'removeOneQuantity'])->name('removeOneQuantity');

Route::get('/search',[ProductController::class, 'search'])->name('search');
