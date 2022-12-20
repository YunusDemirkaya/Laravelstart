<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yazilim;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/ornek',function(){return view('ornek');});
// Route::get("/phpturkiye/{isim}",[Ornek::class,'test']);

// Kendi yaptığım root kodları

//  Route::get("/yazilim",function(){return view('yazilim');});
 Route::get("/yazilim/{text}",[Yazilim::class,'degisken']);