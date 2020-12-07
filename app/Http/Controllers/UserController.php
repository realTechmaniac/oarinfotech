<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $orders   = Order::orderBy('created_at', 'desc')->take(5);

        return view('dashboard.pages.user_index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {       
        //Return the Authenticated User view::  

        return view('dashboard.pages.profile')->with('user', auth()->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'          =>  'required|string|max:255',
            'email'         =>  'required|string|email|max:255|unique:users,email,'.auth()->id(),
            'password'      =>  'sometimes|nullable|string|min:8|confirmed',
            'phonenumber'  =>   'required|string|max:11',
        ]);

        $input = $request->except('password', 'password_confirmation');

        $user  = auth()->user();

        if (! $request->filled('password')) {
            
            $user->fill($input)->save;

            return back()->with('success_message', 'Profile Updated Successfully');
        }

        $user->password = bcrypt($request->password);

        $user->fill($input)->save();

        return back()->with('success_message', 'Profile and Password Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function logout(){

        Auth::logout();


        return redirect('/');
    }
}
