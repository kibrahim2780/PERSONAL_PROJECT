<?php

use App\Http\Controllers\PieChartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus' , function (){
    return view('About-us');
});
Route::get('/product' , function (){
    return view('product');
});
Route::get('/exihibition' , function (){
    return view('exhibition');
});
Route::get('/service' , function (){
   return view('services');
});
Route::get('/support' , function (){
   return view('customer-support');
});
Route::get('/', [PieChartController::class, 'index']);
