<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;
use App\Slider;
use App\Category;
use Cart;
use Session;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $latest_orders  = Order::orderBy('created_at', 'desc')->limit(5)->get();

        $orders         = Order::all();

        $products       = Product::all();

        $users          = User::all();

    	return view('dashboard.pages.admin-index',compact(['products','users','orders', 'latest_orders']));
    }



    public function showOrders(){
  		
  		$orders = Order::all();

    	return view('dashboard.pages.alluserorders',compact('orders'));
    }


  public function showUserDetails($id){

    $orders = auth()->user()->orders;

    return view('dashboard.pages.orderdetails',compact('orders'));

  }


}
