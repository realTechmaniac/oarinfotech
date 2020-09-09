<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('dashboard.pages.products-index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.pages.create');
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

            'product_name'        =>'required|max:50',
            'product_price'       =>'required|numeric',
            'product_description' =>'required|max:255',
            'product_colour'      =>'required',
            'product_image'       =>'image|required|max:1999',
            'product_discount'    =>'required',
            'product_category'    => 'required'
       ]);


        //File Upload

        if ($request->hasFile('product_image')) {
            
            //get file name with extension
         
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName(); 

            //get File name

            $fileName        = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get Extension

            $extension       = $request->file('product_image')->getClientOriginalExtension();


            //file name to store ::

            $fileNameToStore = $fileName.'-'.time().$extension;

            //Upload Image

            $path = $request->file('product_image')->storeAs('/public/product_images',             $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }

       //Create a Post Istance and save to DB:

            $product = new Product();

            $product->product_name        = $request->product_name;

            $product->product_price       = $request->product_price;

            $product->product_description = $request->product_description;

            $product->product_colour     =  $request->product_colour;

            $product->product_discount    =  $request->product_discount;

            $product->product_image       =  $fileNameToStore;

            $product->product_category    = $request->product_category;

            $product->save();


            return redirect('/products')->with('sucess', 'Post Created Successfully');


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
        $product = Product::find($id);

        return view('dashboard.pages.edit_product', compact('product'));
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
         $product = Product::find($id);


          $request->validate([

            'product_name'        =>'required|max:50',
            'product_price'       =>'required|numeric',
            'product_description' =>'required|max:255',
            'product_colour'      =>'required',
            'product_image'       =>'image|required',
            'product_discount'    =>'required',
            'product_category'    => 'required'
       ]);


        //File Upload

        if ($request->hasFile('product_image')) {
            
            //get file name with extension
         
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName(); 

            //get File name

            $fileName        = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get Extension

            $extension       = $request->file('product_image')->getClientOriginalExtension();


            //file name to store ::

            $fileNameToStore = $fileName.'-'.time().$extension;

            //Upload Image

            $path = $request->file('product_image')->storeAs('/public/product_images',             $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }


        //Create a Post Istance and save to DB:

            $product = new Product();

            $product->product_name        = $request->product_name;

            $product->product_price       = $request->product_price;

            $product->product_description = $request->product_description;

            $product->product_colour     =  $request->product_colour;

            $product->product_discount    =  $request->product_discount;

            $product->product_image       =  $fileNameToStore;

            $product->product_category    = $request->product_category;

            $product->save();


        return redirect('/products')->with('success', 'The product has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id)->delete();

        return redirect('/products');
    }
}
