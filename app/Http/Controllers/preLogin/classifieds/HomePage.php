<?php

namespace App\Http\Controllers\preLogin\classifieds;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomePage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('preLogin/classifieds/home');
    }
    
    public function signup(){
        return view('preLogin/classifieds/signup');
    }

    public function prePostAd(){
        return view('preLogin/classifieds/prePostAd');
    }

    public function cars(){
        return view('preLogin/classifieds/cars');
    }

    public function addProfile(){
        return view('preLogin/classifieds/addProfile');
    }

    public function flatHouses(){
        return view('preLogin/classifieds/flatHouses');
    }
    
    public function forSale(){
        return view('preLogin/classifieds/forSale');
    }

    public function helpDesk(){
        return view('preLogin/classifieds/helpDesk');
    }

    public function productDetails(){
        return view('preLogin/classifieds/productDetails');
    }
}
