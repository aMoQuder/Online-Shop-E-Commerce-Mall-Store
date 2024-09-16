<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {   $cartItems = CartFacade::getContent();
        return view('about',["cartItems"=>$cartItems] );
    }

}
