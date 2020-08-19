<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
   function myName(){
        return "My name is Runju Raton";
   } 

   function myAttitude(){
        return "My personality is very Strong";
   }
}
