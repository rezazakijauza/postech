<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/postech/{alamat}/cek', [HaiController::class, 'kota']);

Route::get('/Reza', function () {
    return view('welcome');
});
