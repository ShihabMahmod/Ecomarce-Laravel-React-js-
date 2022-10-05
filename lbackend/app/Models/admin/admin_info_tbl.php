<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_info_tbl extends Model
{
    use HasFactory;

    protected $admin_info = "admin_info_tbls";
    public $timestamps = false;

    protected $fillable  = [
        'name',
        'email',
        'password',
        'phone',
        'status'
    ];
}
