<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $slider = "sliders";
    public $timestamps = false;

    protected $fillable  = [
        'title',
        'slug',
        'description',
        'image',
        'status'
    ];
}
