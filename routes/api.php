<?php


use App\Http\Controllers\Products\AddProductController;
use App\Http\Controllers\Products\DeleteProductController;
use App\Http\Controllers\Products\GetProductController;
use App\Http\Controllers\Products\GetProductsByPageController;
use App\Http\Controllers\Products\UpdateProductController;
use App\Http\Controllers\Users\GetUserController;
use App\Http\Controllers\Users\LogInController;
use App\Http\Controllers\Users\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LogInController::class, 'login'])->name('login');

Route::middleware('auth:api')->group(function () {
    Route::get('/getProductsByPage',[GetProductsByPageController::class,'getProdByPage']);
    Route::delete('/deleteProduct',[DeleteProductController::class,'deleteProduct']);
    Route::patch('/updateProduct', [UpdateProductController::class, 'updateProduct']);
    Route::get('/getProduct', [GetProductController::class, 'get'])->name('get');
    Route::post('/addProduct', [AddProductController::class, 'add'])->name('add');
    Route::get('/getUser', [GetUserController::class, 'getUser']);
});







