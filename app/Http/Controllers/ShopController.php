<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function shopHome($id)
    {
    	$user_id = Auth::User()->id;
    	$user = User::find($user_id);

    	return view('vendor.shop.shop_details', [
    		'user' => $user
    	]);
    }

    public function store(Request $request, $id)
    {
    	$this->validate($request, [
    		'shop_name' => 'nullable|string|max:50',
    		'address' => 'nullable|string|max:100',
    		'phone' => 'nullable|string|max:20',
    	]);

    	if($request->hasFile('image'))
        {
            $image = $request->image;

            $file_name  = 'image' . time() . '.' . $image->getClientOriginalExtension();
            $base_dir = public_path() . '/shop_images';
            $db_location = 'shop_images/' . $file_name;
            $location   = $base_dir . '/' . $file_name;

            if(!file_exists($base_dir))
            {
                mkdir($base_dir, 666, true);
            }

            $data['image']  = $db_location;
        }

        $user_id = Auth::User()->id;
        $user = User::find($user_id);

        $user->shop_name = $request->shop_name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->image = $data['image'];
        $user->update();
        return redirect()->back()->with('success', 'Shop details update successful');
    }
}
