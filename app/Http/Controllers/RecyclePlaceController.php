<?php

namespace App\Http\Controllers;

use App\Models\RecyclePlace;
use App\Http\Requests\RecyclePlaceRequest;
use App\Http\Requests\UpdateRecyclePlaceRequest;
use Illuminate\Support\Facades\Http;

class RecyclePlaceController extends CRUDApiController
{
    private function limit_after_comma($text, $limit = 4)
    {
        if (!str_contains($text, '.')) {
            return $text;
        }
        $arrayExplode = explode('.', $text);
        $arrayExplode[1] = substr($arrayExplode[1], 0, $limit);
        return implode('.', $arrayExplode);
    }

    private function getDistance($x1, $y1, $x2, $y2)
    {
        $x1 = $this->limit_after_comma($x1);
        $y1 = $this->limit_after_comma($y1);
        $x2 = $this->limit_after_comma($x2);
        $y2 = $this->limit_after_comma($y2);
//        dd($this->limit_after_comma($x2));
        $queryDistance = $x1 . ',' . $y1 . ';' . $x2 . ',' . $y2;
//        dd($queryDistance);
        $getDistance = Http::get(
//            'router.project-osrm.org/route/v1/driving/106.70392,10.78457;106.70257,10.78402'
            'router.project-osrm.org/route/v1/driving/' . $queryDistance

        );
        $dataJson = json_decode($getDistance, true);
        if (empty($dataJson)) {
            return PHP_INT_MIN;
        }
        return $dataJson['routes'][0]['distance'] ?? PHP_INT_MIN;
    }

    protected function model(): string
    {
        return RecyclePlace::class;
    }

    protected function getFormRequest(): string
    {
        return RecyclePlaceRequest::class;
    }

    public function index()
    {
        $recyclePlaceList = $this->model()::all();
        $x = request()->input('x');
        $y = request()->input('y');
        $minDistance = PHP_INT_MAX;
        $keyPlace = null;
        foreach ($recyclePlaceList as $key => $place) {
            $distance = $this->getDistance($x, $y, $place->x, $place->y);
            $recyclePlaceList[$key]['distance'] = $distance;
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $keyPlace = $key;
            }
        }
        if ($keyPlace !== null) {
            $recyclePlaceList[$keyPlace]['is_priority'] = 1;
        }
        return $this->successResponse(
            $recyclePlaceList
        );
    }


}
