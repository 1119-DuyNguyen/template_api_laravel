<?php

namespace App\Http\Controllers;

use App\Models\WasteDictionary;
use App\Http\Requests\WasteDictionaryRequest;
use App\Http\Requests\UpdateWasteDictionaryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    public function identifyRecycleTrash(Request $request)
    {

        $response = Http::get("awfully-happy-lizard.ngrok-free.app/analyze",  [
            'image'=> $request->input('image')
//            'image'=> "https://res.cloudinary.com/dizoqp8hc/image/upload/v1710578263/mdynfbrid1wyhrqqbuy2.jpg"

        ]);
        $dataJson = json_decode($response, true);
        if(empty($dataJson))
        {
            return $this->errorResponse(['message'=> 'Nhận dữ liệu thất bại'], 500);
        }
        $dataDictionary=$dataJson['json_data'];
        $wasteDictionary = WasteDictionary::all();
        foreach ($dataDictionary as $key => $data) {
            $dataWaste = $wasteDictionary->filter(function ($value, $key) use ($data) {
                return str_contains($value['name'], $data['name']);
            })->first();
            if (!empty($dataWaste)) {
                $dataDictionary[$key]['dictionary'] = $dataWaste;
            }
        }
        $dataJson['json_data']=$dataDictionary;
        return $this->successResponse([$dataJson]);
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
