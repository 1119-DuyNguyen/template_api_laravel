<?php

namespace App\Http\Controllers\BackendWeb;

use App\Http\Controllers\CRUDApiController;
use App\Http\Controllers\CRUDController;
use App\Http\Requests\RecycleCRUDPlaceRequest;
use App\Models\RecyclePlace;
use App\Http\Requests\RecyclePlaceRequest;
use App\Http\Requests\UpdateRecyclePlaceRequest;
use Illuminate\Support\Facades\Http;


class RecyclePlaceCRUDController extends CRUDController
{


    protected function model(): string
    {
        return RecyclePlace::class;
    }

    protected function getFormRequest(): string
    {
        return RecycleCRUDPlaceRequest::class;
    }


    protected function CRUDViewPath(): string
    {
        return 'recycle-places';
    }

    protected function getNameRouteCRU(): string
    {
        return 'web.recycle-places';
    }

    protected function getFormElements(): array
    {
        return [
            [
                'type' => 'text',
                'name' => "name",
                'class' => "",
                'label' => "Tên nơi tái chế",
            ],
            [
                'type' => 'textfield',
                'name' => "address",
                'class' => "",
                'label' => "Địa chỉ",
            ],
            [
                'type' => 'phone',
                'name' => "contact",
                'class' => "",
                'label' => "Số điện thoại liên hệ",
            ],

            [
                'type' => 'text',
                'name' => "add_point",
                'class' => "",
                'label' => 'Toạ độ cửa hàng - lấy từ <a  class="text-uppercase" href="https://www.openstreetmap.org/#map=18/10.78466/106.70389&layers=N">OpenStreetMap</a>',
            ],

        ];
    }
}
