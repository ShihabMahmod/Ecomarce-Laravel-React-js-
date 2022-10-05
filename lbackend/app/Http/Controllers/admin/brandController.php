<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\brand;

class brandController extends Controller
{
    public function addBrand(Request $req)
    {
        $brand = new  brand;

        $brand->brand_name    = $req->input('brand_name');
        $brand->slug          = $req->input('slug');
        $brand->description   = $req->input('description');
        $brand->status        = 0;
        $brand->brand_logo    = $req->file('image')->store('products');

        $brand->save();
    }
    public function brandList()
    {
        $brand = new brand;

        $result = $brand::all();
        return $result;
    }
    public function dleteBrand($id)
    {
        $brand = new brand;
        $result = $brand::where("id",$id)->delete();
        return $result;
    }
}
