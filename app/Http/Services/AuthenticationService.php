<?php

namespace App\Http\Services;

use Illuminate\Http\Request;


class AuthenticationService
{
    private function successResponse($data = [], int $code = 200)
    {
        return response()->json(
            [
                'status' => 'Request was successful.',
                'data' => $data,
            ],
            $code
        );
    }

    private function errorResponse($data, int $code)
    {
        return response()->json(
            [
                'status' => 'An error has occurred...',
                'data' => $data,
            ],
            $code
        );
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(Request $request)
    {
        $data = [
            'username' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        return $this->proxy('password', $data, 'Đăng nhập thành công', '*');
    }

    /**
     *  refresh the access token
     */
    public function refreshAuthentication(Request $request)
    {
        return $this->proxy('refresh_token', [
            'refresh_token' => $request->input('refresh_token'),
            'scope' => '*'
        ], '');
    }

    /**
     * Proxy a request to the OAuth server. (limit scope)
     *
     * @param string $grantType type of grant type should be proxied
     * @param array $data data send to the server
     */
    private function proxy(string $grantType, array $data = [], $message = '', $scope = '')
    {
        $data = array_merge($data, [
            'client_id' => config('passport.client_id'),
            'client_secret' => config('passport.client_secret'),
            'grant_type' => $grantType,
        ]);
        if ($scope) {
            $data['scope'] = $scope;
        } else {
            $data['scope'] = '';
        }

        /*
            internal API request.
        */
        $internalRequest = Request::create(route('passport.token'), 'POST', $data);
        $response = app()->handle($internalRequest);
        $dataResponse= json_decode($response->getContent(),true);
        if ($response->isSuccessful()) {
            return $this->successResponse($dataResponse);
        }
        return $this->errorResponse(['message' => __($dataResponse['message']) ], 407);
    }

    public function logout(): void
    {
        $user = auth()->user();

        $accessToken = $user->token();

        //log out all devices
//        $refreshToken = DB::table('oauth_refresh_tokens')
//            ->where('access_token_id', $accessToken->id)
//            ->update([
//                'revoked' => true
//            ]);
        $accessToken->revoke();
    }


}
