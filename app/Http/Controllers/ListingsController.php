<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingsController extends Controller
{
    public function index(){
        return view('frontend.pages.listings.index');
    }

    public function create(){
        return view('frontend.pages.listings.add');
    }

    public function store( Request $request){
        $validated = $request->validate([
            'listing_name' => 'required|unique:users',
            'category'  => 'required',
            'keywords'  => 'required',
            'location'  => 'required',
            'street'  => 'required',
            'state'  => 'required',
            'zipcode'  => 'required',
            'details'  => 'required',
            'files'  => 'required',
            'phone'  => 'required',
            'website'  => 'required',
            'e_mail'  => 'required',
            'facebook'  => 'required',
            'youtube'  => 'required',
            'opening_hour_status'  => 'required',
            'opening_time'  => 'required',
            'closing_time'  => 'required',
            'pricing_status'  => 'required',
            'pricing_title'  => 'required',
            'pricing_description'  => 'required',
            'pricing_price'  => 'required',
            'category'  => 'required',
            'category'  => 'required',
            'category'  => 'required',
            'category'  => 'required',
            
        ]);

        DB::beginTransaction();
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function createByDashboard(){
        return view('backend.pages.add-listings');
    }
}
