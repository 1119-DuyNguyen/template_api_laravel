<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CRUDApiController;
use App\Http\Requests\ProfileRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends CRUDApiController
{


    protected function model(): string
    {
        return User::class;
    }

    protected function addAutoInput(Request $request): array
    {
        $role_id = $request->input('role', []);
        return ['role_id' => $role_id];
    }

    protected function getFormRequest(): string
    {
        return ProfileRegisterRequest::class;
    }


}
