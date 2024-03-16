<?php

namespace App\Http\Controllers;

use App\Traits\InputHandlerTrait;
use Cache;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;


abstract class ApiController extends Controller
{

    //$this->success($data,204,'Xóa Thành công)
    //$this->error($data,403,'Không đủ quyền hạn')
    protected function successResponse($data=[], int $code = 200)
    {
        return response()->json(
            [
                'status' => 'Request was successful.',
                'data' => $data,
            ],
            $code
        );
    }

    protected function errorResponse($data, int $code)
    {
        return response()->json(
            [
                'status' => 'An error has occurred...',
                'data' => $data,
            ],
            $code
        );
    }

    protected function getExternalApi($url, $parameter = []): \Illuminate\Http\JsonResponse
    {
            $response = Http::withHeader(
                'token',
                "",
            )->acceptJson()->get($url, $parameter);
            if ($response->ok()) {
                return $response->json();
            } else {
                return [];
            }

    }
}
