<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginApiRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticatedApiController extends ApiController
{

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginApiRequest $request): RedirectResponse
    {

       return $request->authenticate();

//        Session::put('success','Đăng nhập thành công');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = auth()->user();

        $accessToken = $user->token();


        $accessToken->revoke();
        //  dd(Cookie::get(self::REFRESH_TOKEN));

        return $this->success([], 204);
    }
}
