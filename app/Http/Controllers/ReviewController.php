<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'review' => $request->review,
    		'shop_id' => $request->shop_id,
    		'rating' => $request->rating,
    	);

    	$validator = \Validator::make($data, [
            'name'   => 'nullable|string|max:20',
            'email'   => 'required|string|max:20',
            'review' => 'required|string',
            'rating' => 'required'

        ]);
    	$success_notification = array(
		    'message' => 'You have reviewed this product!',
		    'alert-type' => 'success'
		);

		$review = new Review;
		$review->name = $request->input('name');
		$review->email = $request->input('email');
		$review->shop_id = $request->input('shop_id');
        $review->slug = Str::slug(Str::random(5));
		$review->rating = $request->input('rating');
		$review->review = $request->input('review');

		$review->save();

		return redirect()->back()->with($success_notification);
    }

}
