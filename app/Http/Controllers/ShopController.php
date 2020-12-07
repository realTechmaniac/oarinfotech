<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function search(Request $request){

    	return view('pages.search-result');
    }
}
