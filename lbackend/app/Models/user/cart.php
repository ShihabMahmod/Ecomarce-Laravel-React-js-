<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $cart = "carts";
    public $timestamps = false;

    protected $fillable  = [
        'user_id',
        'productt_id',
        'name',
        'price',
        'warenty',
        'image',
        'quantity'
    ];
}
