<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginApiRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Http\Services\AuthenticationService;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationApiController extends ApiController
{
    private AuthenticationService $authenticationService;

    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    /**
     * Register new user then authenticate
     */
    public function register(RegisterUserRequest $request)
    {

        $user=User::create($request->all())->sendEmailVerificationNotification();
//        event(new Registered($user));

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginApiRequest $request)
    {
        return $this->authenticationService->authenticate($request);
    }

    /**
     * Handle an refresh token request.
     */
    public function update(Request $request)
    {
        return $this->authenticationService->refreshAuthentication($request);
//        Session::put('success','Đăng nhập thành công');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->authenticationService->logout();
        return $this->successResponse(code: 204);
    }
}
