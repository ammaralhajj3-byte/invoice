<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About/{name}', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/send_name',[NameController::class,'showmy']);


Route::resource('products', ProductController::class);