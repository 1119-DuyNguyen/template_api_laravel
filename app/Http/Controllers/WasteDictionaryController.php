<?php

namespace App\Http\Controllers;

use App\Models\WasteDictionary;
use App\Http\Requests\WasteDictionaryRequest;
use App\Http\Requests\UpdateWasteDictionaryRequest;
use Illuminate\Http\Request;

class WasteDictionaryController extends CRUDApiController
{
    public function index()
    {
        $request = request();
        $search = $request->input('search');
        return $this->successResponse(
            $this->model()::when($search, function ($q) use ($search) {
                return $q->where('name', 'like', '%' . $search . '%');
            })->get()
        );
    }

    public function identifyRecycleTrash()
    {
        $dataJson = '[
  {
    "name":"Straw",
    "class":15,
    "confidence":0.36858633160591125,
    "box":{
      "x1":228.34011840820312,
      "y1":305.42724609375,
      "x2":303.4591064453125,
      "y2":488.4927673339844
    }
  },
  {
    "name":"Plastic bag - wrapper",
    "class":12,
    "confidence":0.3680908679962158,
    "box":{
      "x1":644.1629028320312,
      "y1":323.063720703125,
      "x2":715.6552734375,
      "y2":382.78350830078125
    }
  },
  {
    "name":"Bottle",
    "class":2,
    "confidence":0.2597953677177429,
    "box":{
      "x1":519.1807250976562,
      "y1":463.2942810058594,
      "x2":635.2604370117188,
      "y2":540.5502319335938
    }
  }
]';
        $dataJson = json_decode($dataJson, true);
        //fix sau
        $wasteDictionary = WasteDictionary::all();
//        $wasteDictionary=WasteDictionary::whereIn('name',$dataJson->pluck('name'))->get();
        foreach ($dataJson as $key => $data) {
            $dataWaste = $wasteDictionary->filter(function ($value, $key) use ($data) {
                return str_contains($value['name'], $data['name']);
            })->first();
            if (!empty($dataWaste)) {
                $dataJson[$key]['dictionary'] = $dataWaste;
            }
        }
        return $this->successResponse($dataJson);
    }

    protected function model(): string
    {
        return WasteDictionary::class;
    }

    protected function getFormRequest(): string
    {
        return WasteDictionaryRequest::class;
    }
}
