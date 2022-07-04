<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DachboardController extends Controller
{
    function index(){
        return view('admin.dachboard');
    }
}
