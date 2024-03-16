<?php

namespace App\Observers;


use App\Models\RecyclePlace;

class RecyclePlaceObserver
{
    public function retrieved(RecyclePlace $recyclePlace)
    {
        if (isset($recyclePlace->add_point)) {
            $coordinate = explode(',', $recyclePlace->add_point);
            $recyclePlace->y = preg_replace('/\s+/', '', $coordinate[0]);
            $recyclePlace->x = preg_replace('/\s+/', '', $coordinate[1]);
        }
        //
    }


}
