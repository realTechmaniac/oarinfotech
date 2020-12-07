<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct(){

		$this->middleware('guest:admin');

	}

    //method to show Login Form::

    public function showLoginForm(){

    	return view('auth.admin-login');
    }

    public function login(Request $request){

    	//Validate form data::

    	$this->validate($request, [

    		'email'    => 'required|email',

    		'password' =>  'required|min:6'
    	]);

    	//Attempt to login Users::

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		
    		//If succesful

    		return redirect()->intended(route('admin.dashboard'));

    	}
    	
    	//If Unsucessful

    	 return redirect()->back()->withInput($request->only('email','remember'));
    } 


    public function logout(Request $request){

    	dd('hit');
    	Auth::logout();
	    Session::flush();
	    return Redirect::to('/');
	    }
}
