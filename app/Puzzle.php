<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'pieces',
        'image',
        'description',
        'brand',
        'price',
        'available',
        'quantity',
    ];
}
