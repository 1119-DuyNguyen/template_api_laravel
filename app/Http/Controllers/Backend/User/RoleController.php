<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CRUDApiController;
use App\Http\Requests\Backend\RoleRequest;
use App\Models\Role;

class RoleController extends CRUDApiController
{

    protected function model(): string
    {
        return Role::class;
    }

    protected function getFormRequest(): string
    {
        return RoleRequest::class;
    }


}
