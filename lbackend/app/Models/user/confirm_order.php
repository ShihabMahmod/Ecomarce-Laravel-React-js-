<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirm_order extends Model
{
    use HasFactory;

    protected $cart = "confirm_orders";
    public $timestamps = false;

    protected $fillable  = [
        'user_id',
        'product_id',
        'name',
        'price',
        'quantity',
        'image'
    ];
}
