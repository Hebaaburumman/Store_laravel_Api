<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\SignupController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DashboardController;
use Laravel\Passport\Http\Controllers\AccessTokenController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//signup

 Route::prefix('api')->group(function () {
    Route::post('/register', [SignupController::class, 'store']);
});

//login

Route::post('/login', [LoginController::class, 'store']);

//user

Route::post('/users', [UserController::class, 'store']);//done
Route::put('/users/{id}', [UserController::class, 'update']); //done
Route::delete('/users/{id}', [UserController::class, 'destroy']); //done
Route::get('/users', [UserController::class, 'list']);//done


//product
    Route::get('/products', [ProductController::class, 'index']); //done
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}/edit', [ProductController::class, 'edit']); //done
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'delete']); //done
    Route::put('/products/{id}/remove-quantity', [ProductController::class, 'removeOneQuantity']);//done

// routes/api.php


// Route::middleware('auth:api')->group(function () {
//     Route::post('/products', [ProductController::class, 'store']);
// });

// category // all done
    Route::get('/categories', [CategoryController::class, 'index']); //done the products appear with category
    Route::post('/categories', [CategoryController::class, 'store']); //done
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']); //done
    Route::put('/categories/{id}', [CategoryController::class, 'update']); // done
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']); // done 

    
//dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard']); //done
    // Route::get('/dashboard/products-by-category', [DashboardController::class, 'productsByCategory']);




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});






 






