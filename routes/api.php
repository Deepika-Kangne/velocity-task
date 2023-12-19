<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('get-employees',[EmployeeController::class,'getAllEmployees']);
Route::get('get-employee/{id}',[EmployeeController::class,'getEmployee']);
Route::post('create-product',[EmployeeController::class,'createEmployees']);
Route::post('update-employees/{id}',[EmployeeController::class,'updateEmployees']);
Route::delete('delete-employees/{id}',[EmployeeController::class,'deleteEmployees']);
