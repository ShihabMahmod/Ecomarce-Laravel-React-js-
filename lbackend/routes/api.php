<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminInfoController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\user\coustomarController;
use App\Http\Controllers\user\cartController;
use App\Http\Controllers\admin\catagoryController;
use App\Http\Controllers\admin\brandController;
use App\Http\Controllers\user\orderController;
use App\Http\Controllers\user\confirmOrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/adminReg",[adminInfoController::class,'adminReg']);
Route::post("/login",[adminInfoController::class,'login']);


Route::post('/addProduct',[productController::class,'addProduct']);
Route::get('/productList',[productController::class,'productList']);
Route::get('/singleproduct/{id}',[productController::class,'singleproduct']);
Route::get('/featureProduct',[productController::class,'featureProduct']);
Route::get('/ElectronicsProductList',[productController::class,'ElectronicsProductList']);
Route::get('/appleBrand',[productController::class,'appleBrand']);
Route::delete('/deleteProduct/{id}',[productController::class,'deleteProduct']);

Route::post('/addSlide',[sliderController::class,'addSlide']);
Route::get('/slideShow',[sliderController::class,'sliderShow']);
Route::delete('/deleteSlide/{id}',[sliderController::class,'deleteSlide']);

Route::post('/userReg',[coustomarController::class,'userReg']);
Route::post('/userLogin',[coustomarController::class,'userLogin']);

Route::Post('/addCart',[cartController::class,'addCart']);
Route::Post('/addToCart/{id}',[cartController::class,'addToCart']);
Route::get('/showCart/{user_id}',[cartController::class,'showCart']);
Route::delete('/deleteCart/{id}',[cartController::class,'deleteCart']);
Route::delete('/deleteAllCart/{user_id}',[cartController::class,'deleteAllCart']);

Route::post('/addCatagory',[catagoryController::class,'addCatagory']);
Route::get('/catagoryyList',[catagoryController::class,'catagoryyList']);
Route::delete('/deleteCatagor/{id}',[catagoryController::class,'deleteCatagor']);

Route::post('/addBrand',[brandController::class,'addBrand']);
Route::get('/brandList',[brandController::class,'brandList']);
Route::delete('/dleteBrand/{id}',[brandController::class,'dleteBrand']);

Route::post('/confirmOrder',[orderController::class,'confirmOrder']);
Route::get('/allOrder',[orderController::class,'allOrder']);

Route::post('/confirmOrdeDetails',[confirmOrderController::class,'confirmOrdeDetails']);
Route::get('/orderdProductDetails/{user_id}',[confirmOrderController::class,'orderdProductDetails']);