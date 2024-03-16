<?php

use App\Http\Controllers\Auth\Api\AuthenticationApiController;
use App\Http\Controllers\Auth\Api\VerifyEmailController;
use App\Http\Controllers\BackendWeb\User\RoleController;
use App\Http\Controllers\BackendWeb\User\UserController;
use App\Http\Controllers\RecyclePlaceController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\WasteDictionaryController;
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


Route::post('/login', [AuthenticationApiController::class, 'store'])->name('login');

Route::post('/refresh', [AuthenticationApiController::class, 'update'])->name('refresh');

Route::post('/logout', [AuthenticationApiController::class, 'update'])->name('logout');
Route::post('/register', [AuthenticationApiController::class, 'register'])->name('register');


// Verify email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifyEmail'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

// Resend link to verify email
Route::post('/email/verify/resend', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return response()->json(["msg" => "Email already verified."], 400);
    }

    $request->user()->sendEmailVerificationNotification();

    return response()->json(["message" => "Email verification link sent on your email id"]);
})->middleware(['auth:api', 'throttle:6,1'])->name('verification.send');
Route::post('reset-password', [ResetPasswordController::class, 'sendMail']);
Route::put('reset-password/{token}', [ResetPasswordController::class, 'reset'])->name('reset-password.token');

/** Admin Routes */
//Route::middleware('hasPermission')->group(function () {
/** manage user routes */
Route::apiResource('users', UserController::class);
//manage role
Route::apiResource('roles', RoleController::class);
Route::post('waste-dictionaries/identify', [WasteDictionaryController::class, 'identifyRecycleTrash']);
Route::apiResource('waste-dictionaries', WasteDictionaryController::class);
Route::apiResource('recycle-places', RecyclePlaceController::class);

//});

