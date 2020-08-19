<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //

    function MyName($firstName, $lastName){
        return view('DemoView',['firstName'=>$firstName,"lastName"=>$lastName]);

    }
}
