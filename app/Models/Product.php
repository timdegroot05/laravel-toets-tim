<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'home_nr',
        'zipcode',
        'city',
        'phone_nr',
    ];

    public $timestamps = false;

}
