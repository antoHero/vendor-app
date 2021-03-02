<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestion;
use Illuminate\Support\Str;

class SuggestionController extends Controller
{
    public function store(Request $request)
    {
    	$data = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'suggestion' => $request->suggestion,
    	);

    	$validator = \Validator::make($data, [
            'name'   => 'nullable|string|max:20',
            'email'   => 'required|string|max:20',
            'suggestion' => 'required|string',

        ]);
    	$success_notification = array(
		    'message' => 'We have recieved your complaint/suggestion!',
		    'alert-type' => 'success'
		);

		$suggestion = new Suggestion;
		$suggestion->name = $request->input('name');
    $suggestion->slug = Str::slug(Str::random(5));
		$suggestion->email = $request->input('email');
		$suggestion->suggestion = $request->input('suggestion');

		$suggestion->save();

		return redirect()->back()->with($success_notification);
   //      if($validator->fails())
   //      {
   //      	$notification = array(
			//     'message' => 'An error occured. Try again!',
			//     'alert-type' => 'error'
			// );
   //      	return redirect()->back()->with($notification);
   //      }

   //      else {
   //      	$suggestion = new Suggestion;
   //      	$suggestion->create($data);
   //      	return redirect()->back()->with($success_notification);
   //      }
    }

    public function delete($slug)
    {
      $suggestion = Suggestion::where('slug', $slug)->first();
      $suggestion->delete();

      $delete_notification = array(
            'message' => 'You have deleted a suggestion!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($delete_notification);
    }
}
