<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('dashboard.pages.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_categories');
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

            'category_name'       =>'required|max:255',
            'category_description'=>'nullable|max:255',

        ]);

       $checkCategory = Category::where('category_name',$request->input('category_name'))->first();

       if (!$checkCategory) {

            Category::create([

                'category_name'        =>request('category_name'),

                'category_description' =>request('category_description')


            ]);

          
           return redirect('/categories/create')->with('status','The '.$request->input('category_name').' category has been added successfully');

       }else{


            return redirect('/categories/create')->with('status1','The '.$request->input('category_name').' category already exist');

       }

       


        return redirect('/categories');
        
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
        


        $category = Category::findOrFail($id);

        return view('dashboard.pages.edit_categories',compact('category'));

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
       

        $category = Category::findOrFail($id);


         $request->validate([

            'category_name'       =>'required|max:255',
            'category_description'=>'nullable|max:255',

        ]);

       
       $category->category_name        = $request->category_name;

       $category->category_description = $request->category_description;

       $category->save();

        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        Category::find($id)->delete();


        return redirect('/categories')->with('success', 'The'.$category->category_name.' category has been deleted successfully ');
      
    }
}
