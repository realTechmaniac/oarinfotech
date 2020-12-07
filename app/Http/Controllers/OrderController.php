<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use Cart;
use App\User;
use App\UserOrders;
use Mail;
use App\Mail\OrderPlaced;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $orders = auth()->user()->orders()->with('products')->get();


        return view('dashboard.pages.orders', compact('orders'));

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

        $request->validate([

            'name'         => 'required',
            'email'        => 'required',
            'phonenumber'  => 'required',
            'total_amount' => 'required',
            'amount_to_pay'=> 'required'

        ]);


        


        $order =  Order::create([

            'user_id'      => auth()->user() ? auth()->user()->id: null,
            'name'         => request('name'),
            'email'        => request('email'),
            'phonenumber'  => request('phonenumber'),
            'total_amount' => request('total_amount'),
            'amount_to_pay'=> request('amount_to_pay')

        ]);


        //Insert into Order Products::

        foreach(Cart::content() as $item) {
            
            OrderProduct::create([

                'order_id'  => $order->id,
                'product_id'=> $item->id,
                'quantity'  => $item->qty, 
                'user_id'   => $order['user_id'],
            ]);
        }

        // Send a Mail once you have  created the Order:::-->

        //  Mail::to($order->email)->send(
        
        //     new OrderPlaced($order)
        // );

    return redirect('/booksuccess');

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


    //Function to approve user Orders::


    public function approveOrder(Request $request, $id){

        $order = Order::findOrFail($id);

        $order->is_approved = 1;

        $order->update();

    return redirect('/allusersorders')->with('success_message', 'Order has been approved successfully');
    }


    public function dissaproveOrder(Request $request, $id){

        $order = Order::findOrFail($id);

        $order->is_approved = 0;

        $order->update();

        return back()->with('success_message', 'Order has been dissaproved successfully');

    }


    public function showUserDetails(){

    $orders = auth()->user()->orders;

    return view('dashboard.pages.userorderdetails',compact('orders'));

    }

    public function deleteOrder($id){

        $order = Order::findOrFail($id);

        $order->delete();

        return redirect('/allusersorders')->with('success_message', 'Order Deleted successfully');
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
        //
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
}
