<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyclePlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'address' ,
        'schedule' ,
        'contact' ,
        'add_point' ,
    ];
}
