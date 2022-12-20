<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Kendi yazıdğım kodlar

// class yazilim extends Controller
// {
//     function laravel() 
//     {
//         return view('yazilim');
//     }
// }



class Yazilim extends Controller
{
    function degisken($text)
    {
        return view('yazilim',['tx'=>$text]) ;
    }
}

///