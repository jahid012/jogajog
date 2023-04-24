<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class ListingsController extends Controller
{
    public function index(){
        return view('frontend.pages.listings.index');
    }

    public function create(){

        Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);
        return view('frontend.pages.listings.add');
    }

    public function store( Request $request){

        
        
        try {
       $validate =  $request->validate([
            'listing_name' => 'required',
            'category'  => 'required',
            'keywords'  => 'required',
            'location'  => 'required',
            'street'  => 'required',
            'state'  => 'required',
            'zipcode'  => 'required',
            'details'  => 'required',
            'files'  => 'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP|max:5120|nullable',
            'phone'  => 'nullable',
            'website'  => 'nullable',
            'email'  => 'nullable|unique:listings|email|max:50',
            'facebook'  => 'nullable',
            'youtube'  => 'nullable',
            'opening_hour_status'  => 'nullable',
            'opening_time'  => 'nullable',
            'closing_time'  => 'nullable',
            'pricing_status'  => 'nullable',
            'pricing_title'  => 'required',
            'pricing_description'  => 'required',
            'pricing_price'  => 'required',
            
        ]);  

        $listing = new Listing();
        $listing->listing_name = $request->listing_name;
        $listing->category_id = $request->category;
        $listing->keywords = $request->keywords;
        
        $listing->location = $request->location;
        $listing->street = $request->street;
        $listing->state = $request->state;
        $listing->zipcode = $request->zipcode;
        $listing->details = $request->details;
        $listing->files = $request->files;
        $listing->phone = $request->phone;
        $listing->website = $request->website;
        $listing->email = $request->email;
        $listing->facebook = $request->facebook;
        $listing->youtube = $request->youtube;
        $listing->opening_hour_status = $request->opening_hour_status;
        $listing->opening_time = $request->opening_time;
        $listing->closing_time = $request->closing_time;
        $listing->pricing_status = $request->pricing_status;
        $listing->pricing_title = $request->pricing_title;
        $listing->pricing_description = $request->pricing_description;
        $listing->pricing_price = $request->pricing_price;
        $listing->save();
        
        return redirect()->back();
        } catch (\Throwable $e) {
            Toastr::error(__($e->getMessage()));
            return redirect()->back();
        }


        // DB::beginTransaction();
        // try {
            

        //     DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     dd($th);
        // }
    }

    public function createByDashboard(){
        return view('backend.pages.add-listings');
    }
}
