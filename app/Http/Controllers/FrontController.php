<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    function about_us(request $req)
    {
        return view("frontend.about-us");
    }
    function all_product(request $req)
    {
        return view("frontend.all_product");
    }
    function cart(request $req)
    {
        return view("frontend.cart");
    }
    function contactus(request $req)
    {
        return view("frontend.contactus");
    }
    function privacy_policy(request $req)
    {
        return view("frontend.privacy-policy");
    }
    function returns_policy(request $req)
    {
        return view("frontend.returns-refunds");
    }
    function single_page(request $req)
    {
        return view("frontend.single_page");
    }
    function wishlist(request $req)
    {
        return view("frontend.wishlist");
    }
    

}
