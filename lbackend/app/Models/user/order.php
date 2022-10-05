<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $cart = "orders";
    public $timestamps = false;

    protected $fillable  = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'adress1',
        'address2',
        'zip',
        'distric',
        'phone'
    ];
}
