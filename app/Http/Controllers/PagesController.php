<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    //Index Page:

    public function index(){

    	return view('pages.index');
    }

    //About Page:

    public function about(){

    	return view('pages.about');
    }

    //Services Page

    public function services(){

    	return view('pages.services');
    }

    public function contact(){

    	return view('pages.contact');
    }

    public function admin(){

        $products = Product::all();

    	return view('dashboard.pages.admin-index',compact('products'));
    }

    //Pages that returns all Product Categories::
    
    public function showCategories(){

        return view('dashboard.pages.categories');
    }

    //Route to return the store products page::

    public function store(){

        return view('pages.store');
    }
}
