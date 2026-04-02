<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostSubmitController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

    	//Log::debug(dd($request));
        $request->validate([
	    'name'=>'required|min:1|max:40',
	    'email' => ['required','min:3','max:100','email'],
	    'subject' => 'required',
	    'phone' => 'required|numeric',
	    'message' => 'required'
	    ]);

	    $post = new Posts();

	    $post->surname = $request->input('name'); 
	    $post->email   = $request->input('email'); 
	    $post->phone   = $request->input('phone');
	    $post->subject = $request->input('subject');
	    $post->message = $request->input('message');

	    $post->save();

	    return redirect(route('contact'))->withInput()->with('success', 'Повідомлення відправлене!');
    }
}
