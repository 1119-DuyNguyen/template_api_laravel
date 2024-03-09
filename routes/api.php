<?php

use App\Http\Controllers\Auth\Api\AuthenticatedApiController;
use App\Http\Controllers\Backend\User\RoleController;
use App\Http\Controllers\Backend\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/login', [AuthenticatedApiController::class,'store'])->name('login');




/** Admin Routes */
//Route::middleware('hasPermission')->group(function () {
/** manage user routes */
Route::apiResource('users', UserController::class);
//manage role
Route::apiResource('roles', RoleController::class);
//});
