<?php

namespace App\Http\Controllers;

use App\Product;

use Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Add might also like::

        $mightAlsoLike = Product::mightAlsoLike()->get();

        return view('pages.cart');

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

        //Search to see if the Item Exist::-->

            $duplicates = Cart::search(function ($cartItem, $rowId) use($request) {

                return $cartItem->id === $request->id;
            });

            if($duplicates->isNotEmpty()) {
                
                return redirect('/cart')->with('success_message','Item is already in your Cart');
            }

       //Method to add the product to Cart::  
       Cart::add($request->id, $request->name, 1 , $request->price, ['size' => 'large', 'image' => $request->image ] )
            ->associate('App\Product');

        return redirect('/cart')->with('success_message', 'Item was added to your Cart!');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }


    public function switchToSaveForLater($id){

         $item = Cart::get($id);

         Cart::remove($id);

         Cart::instance('saveForLater')->add($item->id, $item->name, 1 , $item->price, ['size' => 'large', 'image' => $item->image ] )
            ->associate('App\Product');

        return redirect('/cart')->with('success_message', 'Item has been saved for later!');

    }
}
