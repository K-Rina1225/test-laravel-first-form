<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TimeController extends Controller
{
    //
    public function index(){
          $item = [
             'content' => 'パラメータを渡す',
         ];
         return view('index', $item);
    }
}
