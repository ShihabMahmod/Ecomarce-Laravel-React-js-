<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customar extends Model
{
    use HasFactory;

    protected $slider = "customars";
    public $timestamps = false;

    protected $fillable  = [
        'user_name',
        'email',
        'password'
    ];
}
