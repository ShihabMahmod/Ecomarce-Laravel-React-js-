<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\product;

class productController extends Controller
{
    public function addProduct(Request $reg)
    {
        $product = new product;

        $product->name              = $reg->input('name');
        $product->catagory          = $reg->input('catagory');
        $product->brand             = $reg->input('brand');
        $product->regular_price	    = $reg->input('regular_price');
        $product->sale_price        = $reg->input('sale_price');
        $product->SKU               = $reg->input('SKU');
        $product->short_description = $reg->input('short_description');
        $product->long_description  = $reg->input('long_description');
        $product->warenty           = $reg->input('warenty');
        $product->attribute         = $reg->input('attribute');
        $product->shipping          = $reg->input('shipping');
        $product->image             = $reg->file('image')->store('products');
        $product->status            = 0;

        $product->save();
    }
    public function productList()
    {
        $product = new product;
        $result = $product::all();
        return $result;
    }
    public function singleproduct($id)
    {
        $product = new product ;
        $result = $product::find($id);
        return $result;
    }
    public function featureProduct()
    {
        $product = new product;
        $result = $product::where("status",1)->get()->all();
        return $result;
    }
    public function ElectronicsProductList()
    {
        $product = new product;
        $result = $product::where("catagory",'Electronocs')->get()->all();
        return $result;
    }
    public function deleteProduct($id)
    {
        $product = new product;
        $result = $product::where("id",$id)->delete();
        return $result;
    }
    public function appleBrand()
    {
        $product = new product;
        $result = $product::where("brand",'Apple')->get()->all();
        return $result;
    }
}
