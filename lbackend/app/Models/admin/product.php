<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $admin_info = "product";
    public $timestamps = false;

    protected $fillable  = [
        'name',
        'catagory',
        'brand',
        'sale_price',
        'SKU',
        'Short_description',
        'long_description',
        'warenty',
        'attribute',
        'shipping',
        'status'
    ];
}
