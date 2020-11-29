<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyaController extends Controller
{
    function index(){
        return view("aya.index");
    }

    function about(){
        return view("aya.about");
    }

    function store(){
        return view("aya.store");
    }
    function products(){
        return view("aya.products");
    }
}
