<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
        $name="<h1>I am from HomeController Home method</h1>";
        return view('Home',['namekey'=>$name]);
    }

    function About(){
        return view('About');
    }

    function Menu(){
        $data=array('Bangladesh','India','America', 'China', 'Japan', 'Germany','Canada', 'Australia');
        $login=false;
        return view('TwentySixView',['datakey'=>$data,'loginkey'=>$login]);
    }
}
