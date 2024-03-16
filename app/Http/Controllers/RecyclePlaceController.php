<?php

namespace App\Http\Controllers;

use App\Models\RecyclePlace;
use App\Http\Requests\RecyclePlaceRequest;
use App\Http\Requests\UpdateRecyclePlaceRequest;

class RecyclePlaceController extends CRUDApiController
{


    protected function model(): string
    {
        return RecyclePlace::class;
    }

    protected function getFormRequest(): string
    {
        return RecyclePlaceRequest::class;
    }
}
