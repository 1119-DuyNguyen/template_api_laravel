<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);

Route::as('web.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'login'])->name('login');

        Route::post('login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('auth:web')->post(
        'logout',
        [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']
    )->name(
        'logout'
    );

    Route::middleware(['auth:web', 'hasPermission'])->group(
        function () {
            Route::put(
                'users/change-status',
                [\App\Http\Controllers\BackendWeb\User\UserController::class, 'changeStatus']
            )->name('users.change-status');
            Route::resource('users', \App\Http\Controllers\BackendWeb\User\UserController::class);
            //manage role
            Route::resource('roles', \App\Http\Controllers\BackendWeb\User\RoleController::class);
            Route::resource('recycle-places', \App\Http\Controllers\BackendWeb\RecyclePlaceCRUDController::class);
        }
    );
}
);
