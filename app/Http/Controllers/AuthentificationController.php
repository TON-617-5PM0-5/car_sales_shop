<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function authentificate(Request $request)
    {
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route("admin"));
        }
 
        return back()->withErrors([
            'email' => 'Данні не знайдені, Вход в адмін преванний',
        ])->withInput();
    }

    public function logout(Request $request){
    	Auth::logout();

	    $request->session()->invalidate();
	    $request->session()->regenerateToken();

	    return redirect(route('login'));
    }
}
