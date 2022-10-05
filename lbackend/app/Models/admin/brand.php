<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $catagory = "brands";
    public $timestamps = false;

    protected $fillable  = [
        'brand_name',
        'slug',
        'description',
        'status',
        'brand_logo'
    ];
}
