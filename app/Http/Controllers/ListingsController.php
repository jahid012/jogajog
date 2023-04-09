<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index(){
        return view('frontend.pages.listings.index');
    }

    public function create(){
        return view('frontend.pages.listings.add');
    }
}
