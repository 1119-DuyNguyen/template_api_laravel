<?php

namespace App\Models;

use App\Observers\RecyclePlaceObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyclePlace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact',
        'add_point',
    ];

    protected static function boot()
    {
        // you MUST call the parent boot method
        // in this case the \Illuminate\Database\Eloquent\Model
        parent::boot();

        // note I am using static::observe(...) instead of Config::observe(...)
        // this way the child classes auto-register the observer to their own class
        static::observe(RecyclePlaceObserver::class);
    }
}
