<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory ,HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'quantity',
    ];

}
