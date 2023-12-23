<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('get-employees',[ProductController::class,'getAllProducts']);
// Route::get('get-employee/{id}',[ProductController::class,'getAllProducts']);
// Route::post('create-product',[EmployeeController::class,'createEmployees']);
// Route::post('update-employees/{id}',[EmployeeController::class,'updateEmployees']);
// Route::delete('delete-employees/{id}',[EmployeeController::class,'deleteEmployees']);


//Route::get('numSquareRoot/{num}',[ProductController::class,'yourMethod']);

Route::get('get-square-root/{squareNo}',[ProductController::class,'getSquareRootOfNumber']);
Route::get('get-products',[ProductController::class,'getProducts']);
