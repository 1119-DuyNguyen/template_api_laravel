<?php

namespace App\Observers;

use App\Models\WasteDictionary;

class WasteDictionaryObserver
{
    public function retrieved(WasteDictionary $wasteDictionary)
    {
        if(isset($wasteDictionary->name)) {
            $wasteDictionary->name_vietsub = __($wasteDictionary->name);
//            $wasteDictionary->name_vietsub = "hi";

        }

        //
    }
    /**
     * Handle the WasteDictionary "created" event.
     */
    public function created(WasteDictionary $wasteDictionary): void
    {
        //
    }

    /**
     * Handle the WasteDictionary "updated" event.
     */
    public function updated(WasteDictionary $wasteDictionary): void
    {
        //
    }

    /**
     * Handle the WasteDictionary "deleted" event.
     */
    public function deleted(WasteDictionary $wasteDictionary): void
    {
        //
    }

    /**
     * Handle the WasteDictionary "restored" event.
     */
    public function restored(WasteDictionary $wasteDictionary): void
    {
        //
    }

    /**
     * Handle the WasteDictionary "force deleted" event.
     */
    public function forceDeleted(WasteDictionary $wasteDictionary): void
    {
        //
    }
}
