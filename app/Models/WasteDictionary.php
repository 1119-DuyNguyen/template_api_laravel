<?php

namespace App\Models;

use App\Observers\WasteDictionaryObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteDictionary extends Model
{
    use HasFactory;
    protected $fillable=[
            'name',
            'description',
            'img_url',
            'is_recycle',
            'how_to_recycle',
    ];
    protected static function boot()
    {
        // you MUST call the parent boot method
        // in this case the \Illuminate\Database\Eloquent\Model
        parent::boot();


        static::observe(WasteDictionaryObserver::class);
    }
}
