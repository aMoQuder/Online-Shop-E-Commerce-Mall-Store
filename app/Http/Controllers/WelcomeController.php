<?php

namespace App\Http\Controllers;

use App\Model\category;
use App\Model\Events;
use App\Model\product;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $product = product::inRandomOrder()->get();
        // جلب جميع التصنيفات
        $categories = Category::inRandomOrder()->take(6)->get();
        // لكل تصنيف، قم بجلب المنتجات المرتبطة به بناءً على parent_id
        $categoriesWithProducts = $categories->map(function ($category) {
            $category->products = Product::where('parent_id', $category->id)->get();
            return $category;
        });
        $blog=Events::all();
        $Catrandom = Category::inRandomOrder()->take(2)->get();
        $Catrandom1 = Category::inRandomOrder()->first();
        $cartItems = CartFacade::getContent();
        return view('welcome', ["blogs" => $blog,"product" => $product,"Catrandom" => $Catrandom,"catrand" => $Catrandom1, "cartItems" => $cartItems,  "categoriesWithProducts" => $categoriesWithProducts], ["category" => $categories]);
    }

}
