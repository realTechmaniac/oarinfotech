<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Client;
use App\Cart;

use Session;

class ClientController extends Controller
{
    
    public function showLogin(){

        return view('pages.login');
    }

    public function showRegister(){

        return view('pages.register');
    }

    public function recoverPassword(){

        return view ('pages.recover');
    }



    public function updateqty(Request $request){

        //print("The product id is ". $request->id. "And the product quantity is".$request->quantity);

        $oldCart = Session::has('cart')? Session::get('cart'):null;

        $cart    = new Cart ($oldCart);

        $cart->updateQty($request->id, $request->quantity);

        Session::put('cart', $cart);

        return redirect::to('/cart');

    }


       public function removeitem($id){

        $oldCart = Session::has('cart')? Session::get('cart'):null;

        $cart    = new Cart($oldCart);

        $cart->removeitem($id);

        if (count($cart->items) > 0 ) {
            
            Session::put('cart', $cart);

        }else{

            Session::forget('cart');
        }

        return redirect::to('/cart');
    }


    public function saveaccount(Request $request){


        $request->validate([

            'fullname'              =>'required|min:10',
            'email'                 =>'required|unique:clients',
            'password'              =>'required|min:6|confirmed',
        ]);


       $client = new Client();

       $client->fullname              = $request->fullname;

       $client->email                 = $request->email;

       $client->password              = bcrypt($request->password);
 
       $client->password2             = bcrypt($request->password_confirmation);

       $client->save();

        return redirect()->back()->with('success', 'Account has been created succcessfully');
    }

    public function logout(){

        Auth::logout($client);

    }


     public function showAllUsers(){

            $clients = Client::all();

            return view('dashboard.pages.allusers', compact('clients'));
    }


    public function accessaccount(Request $request){

        $request->validate([

            'email'   => 'required',
            
            'password'=> 'required'          
        ]);


        $client = Client::where('email', $request->input('email'))->first();


        //Logic

        if ($client) {

            if (Hash::check($request->input('password'), $client->password)) {
                
                Session::put('client', $client);

                 return redirect('/user');

                //return back()->with('status','Your Email is '.Session::get('client')->email);

            } else {
                
                return back()->with('error', 'Wrong Email or Password');
            }
            
        }else{

            return redirect()->back()->with('error', 'You  do not have an account');
        }




    }
}
