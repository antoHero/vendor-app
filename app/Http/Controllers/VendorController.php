<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function products()
    {
    	$user_id = auth()->user()->id;
    	$user = User::find($user_id);
    	$products = Product::all();
    	
    	return view('vendor.products.products', [
    		'products' => $user->products
    	]);
    }

    // public function addProduct()
    // {
    //     return view('vendor.products.create');
    // }

    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:20',
            'price' => 'required|string',
            'description' => 'required|max:100'
        ]);

        if($request->hasFile('image')) {
            $path = $request->image->store('public/products');
            if($path){
                $path_parts = pathinfo($path);
                $data['image'] = $path_parts['filename'] . '.' . $path_parts['extension'];
                $data['image'] = $path_parts['filename'] . '.' . $path_parts['extension'];
            }
            // $image = $request->image;

            // $file_name  = 'image' . time() . '.' . $image->getClientOriginalExtension();
            // $base_dir = public_path() . '/products';
            // $db_location = 'products/' . $file_name;
            // $location   = $base_dir . '/' . $file_name;

            // // if(!file_exists($base_dir))
            // // {
            // //     mkdir($base_dir, 666, true);
            // // }
            // // Image::make($image)->resize(598, 900, function ($constraint) {
            // //     $constraint->aspectRatio();
            // // })->save($location);

            // $data['image']  = $db_location;
        }

        $user_id = Auth::User()->id;

        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $data['image'];
        $product->slug = Str::slug($request->title, '-');
        $product->user_id = $user_id;

        $product->save();
        $success_notification = array(
            'message' => 'You have add a product!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($success_notification);
        // return redirect()->back()->with('success', 'Product added successfully');
    }

    public function editProduct($slug)
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $vendor_product_count = Product::count($user);
        $product = Product::where('slug', $slug)->first();
        return view('vendor.products.edit_product', [
            'product' => $product,
            'vendor_product_count' => $vendor_product_count
        ]);
    }

    public function updateProduct(Request $request, $slug)
    {
        $this->validate($request, [
            'title' => 'required|string|max:20',
            'price' => 'required|string',
            'description' => 'required|max:100'
        ]);

        if($request->hasFile('image')) {
            $path = $request->image->store('public/products');
            if($path){
                $path_parts = pathinfo($path);
                $data['image'] = $path_parts['filename'] . '.' . $path_parts['extension'];
                $data['image'] = $path_parts['filename'] . '.' . $path_parts['extension'];
            }
            // $image = $request->image;

            // $file_name  = 'image' . time() . '.' . $image->getClientOriginalExtension();
            // $base_dir = public_path() . '/products';
            // $db_location = 'products/' . $file_name;
            // $location   = $base_dir . '/' . $file_name;

            // // if(!file_exists($base_dir))
            // // {
            // //     mkdir($base_dir, 666, true);
            // // }
            // // Image::make($image)->resize(598, 900, function ($constraint) {
            // //     $constraint->aspectRatio();
            // // })->save($location);

            // $data['image']  = $db_location;
        }

        $user_id = Auth::User()->id;

        $product = Product::where('slug', $slug)->first();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $data['image'];
        $product->slug = Str::slug($request->title, '-');
        $product->user_id = $user_id;

        $product->update();

        $success_notification = array(
            'message' => 'You have updated this product!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($success_notification);
    }

    public function delete_product($slug)
    {
        $product = Product::where('slug', $slug);
        @unlink($product);
        $product->delete()($product);

        $delete_notification = array(
            'message' => 'You have deleted this product!',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($delete_notification);
    }

}
