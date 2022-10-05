<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;

    protected $catagory = "catagories";
    public $timestamps = false;

    protected $fillable  = [
        'catagory_name',
        'slug',
        'description',
        'status',
        'brand_logo'
    ];
}
