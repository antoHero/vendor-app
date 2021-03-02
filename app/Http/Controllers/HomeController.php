<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Shop;

class HomeController extends Controller
{
    public function home()
    {
    	$front_products = Product::all();
    	return view('frontend.shop_home', [
    		'front_products' => $front_products
    	]);
    }

    public function productDetail($slug)
    {
    	$product = Product::where('slug', $slug)->first();

    	return view('frontend.product_details', [
    		'product' => $product
    	]);
    }
}
