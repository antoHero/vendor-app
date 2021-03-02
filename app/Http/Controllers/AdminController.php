<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Shop;
use App\Models\Suggestion;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
    	$users = User::all();
    	$user_count = User::count();

    	$products = Product::all();
    	$product_count = Product::count();

    	$reviews = Review::all();
    	$review_count = Review::count();

    	$shops = Shop::all();
    	$shop_count = Shop::count();

    	$suggestions = Suggestion::all();
    	$suggestion_count = Suggestion::count();

    	return view('admin.index', [
    		'users' => $users,
    		'user_count' => $user_count,
    		'products' => $products,
    		'product_count' => $product_count,
    		'reviews' => $reviews,
    		'review_count' => $review_count,
    		'shops' => $shops,
    		'shop_count' => $shop_count,
    		'suggestions' => $suggestions,
    		'suggestion_count' => $suggestion_count
    	]);
    }

    public function deleteReview($slug)
    {
        $review = Review::where('slug', $slug)->first();

        $review->delete();
        $delete_notification = array(
            'message' => 'You have deleted this review!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($delete_notification);
    }

    // public function deleteReview($id)
    // {
    //     $review = Review::find($id);

    //     $review->delete();
    //     $delete_notification = array(
    //         'message' => 'You have deleted this review!',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($delete_notification);
    // }

    public function admin_delete_product($slug) {
        $product = Product::where('slug', $slug)->first();
        @unlink($product);
        $product->delete();

        $delete_notification = array(
            'message' => 'You have deleted this product!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($delete_notification);
    }
}
