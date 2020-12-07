<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Category;
use App\User;
use App\Order;
use Cart;
use Session;

class PagesController extends Controller
{
    //Index Page::

    public function index(){

        $products          = Product::all()->take(4);

        $featured_products = Product::inRandomOrder()->take(4)->get();

        $latest_products   = Product::orderBy('created_at', 'DESC')->take(4)->get();

        $sliders           = Slider::where('slider_status', 1)->get();

    	return view('pages.index', compact(['products','sliders','featured_products','latest_products']));
    }

    //About Page:

    public function about(){

    	return view('pages.about');
    }

    //Services Page

    public function services(){

    	return view('pages.services');
    }

    public function shop(){

        $categories = Category::all();

        $products   = Product::all();

        return view('pages.shop', compact(['products','categories']));

    }


    

    public function showLaptops(){

        $products = DB::table('products')->where('product_category','=', 'laptop')->get();

        return view('pages.laptop')->withProducts($products);
    }

    public function showPhones(){

        $products = DB::table('products')->where('product_category','=', 'phone')->get();

        return view('pages.phones')->withProducts($products);

    }

    //ShoW Phone Accessories::

    public function showLapAccess(){

        $products = DB::table('products')->where('product_category','=', 'laptop accessories')->get();

        return view('pages.lapaccess')->withProducts($products);

    }

    //Show Phone Accessories::

    public function showPhoneAccess(){

        $products = DB::table('products')->where('product_category','=', 'phone accessories')->get();

        return view('pages.phoneaccess')->withProducts($products);

    }

    public function contact(){

    	return view('pages.contact');
    }

    public function admin(){

        $latest_orders  = Order::orderBy('created_at', 'desc')->limit(5)->get();

        $orders         = Order::all();

        $products       = Product::all();

        $users          = User::all();

    	return view('dashboard.pages.admin-index',compact(['products','users','orders', 'latest_orders']));
    }



    public function showProduct($id){


        $product       = Product::findOrFail($id);

        return view('pages.showproduct', compact('product'));
    }

    //Pages that returns all Product Categories::
    
    public function showCategories(){

        return view('dashboard.pages.categories');
    }

    //Route to return the store products page::

    public function store(){

        return view('pages.store');
    }


    public function showForm(){

        return view('pages.login');
    }

    public function showUserDashboard(){

        $orders   = Order::where('id', auth()->user()->id)->take(4)->get();
                
        return view('dashboard.pages.user_index')->withOrders($orders);
    }

    public function showCheckOut(){

        
        return view('pages.checkout');
    }


   


    public function showProfile(){

    
        return view('dashboard.pages.profile');
    }


    public function book(){

         return view('dashboard.pages.book'); 
    }


    public function showMessage(){

        return view('pages.booksucess');
    }


    public function listUsers(){

        $users = User::all();

        return view('dashboard.pages.listusers', compact('users'));
    }

}
