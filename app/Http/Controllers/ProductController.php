<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Session;
use Illuminate\Support\Facades\Redirect;

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

        $categories = Category::all();

        return view('dashboard.pages.create')->withCategories($categories);
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
            'old_price'           =>'required',
            'new_price'           =>'required',
            'product_description' =>'required|max:255',
            'product_details'     =>'required',
            'product_colour'      =>'required',
            'product_image'       =>'image|required|max:1999',
            'product_discount'    =>'required',
            'product_category'    => 'required',
            'product_status'      => 'required'
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

            $path = $request->file('product_image')->storeAs('/public/product_images',            
             $fileNameToStore);

        }else{
            

            $fileNameToStore = 'noimage.jpg';
        }

       //Create a Post Istance and save to DB:

        $check_record = Product::where('product_name', $request->input('product_name'))->first();

            if ($check_record) {

                return back()->with('error','Product already exist in database');

            } else {
               
            
            $product = new Product();

            $product->product_name        = $request->product_name;

            $product->old_price           = $request->old_price;

            $product->new_price           = $request->new_price;

            $product->product_description = $request->product_description;

            $product->product_colour      = $request->product_colour;

            $product->product_discount    =  $request->product_discount;

            $product->product_image       =  $fileNameToStore;

            $product->product_category    = $request->product_category;

            $product->product_status      = $request->product_status;

            $product->product_details     = $request->product_details;

            $product->save();


            return redirect('/products')->with('success', 'Product Created Successfully');

            } 
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $mightAlsoLike = Product::where('id', '!=', $product->id )->mightAlsoLike()->get();

        return view('pages.showproduct', compact(['product','mightAlsoLike']));
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

        
        //Validate Updated Request::

        $request->validate([

            'product_name'        =>'required|max:50',
            'product_price'       =>'required|numeric',
            'product_description' =>'required|max:255',
            'product_colour'      =>'required',
            'product_image'       =>'image',
            'product_discount'    =>'required',
            'product_details'     =>'required',
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

            $path = $request->file('product_image')->storeAs('/public/product_images',

             $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }


        //Check if Product already exist in database::
      
        $check_record = Product::where('product_name', $request->product_name)->first();

            if ($check_record) {


                return redirect()->back()->with('error','Product already exist in database');

            } else {

            //If the product does not exist then create new  PRODUCT::


            $product = Product::findOrFail($id);

            $product->product_name        = $request->product_name;

            $product->product_price       = $request->product_price;

            $product->product_description = $request->product_description;

            $product->product_details     = $request->product_details;

            $product->product_colour      = $request->product_colour;

            $product->product_discount    = $request->product_discount;

            $product->product_image       = $fileNameToStore;

            $product->product_details     = $request->product_details;

            $product->product_category    = $request->product_category;

            $product->update();

           
             return redirect('/products')->with('success', 'Product Updated Successfully');

            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->product_image != 'noimage.jpg') {
            
            \Storage::delete('public/product_images/'.$product->product_image);

        }

        $product->delete();

        return redirect('/products')->with('success', 'The '.$product->product_name.' has been deleted successfully');
    }


     public function addToCart($id){

                $product = Product::findOrFail($id);

                $oldCart = Session::has('cart')? Session::get('cart'):null;

                $cart    = new Cart ($oldCart);

                $cart->add($product, $id);

                Session::put('cart', $cart);

                //dd(Session::get('cart'));

                return redirect::to('/');

            }

    public function countProducts($catgoryname){


     $result =   count(Product::where('product_category', $catgoryname)->get());


     return $result;
     
    }

}
