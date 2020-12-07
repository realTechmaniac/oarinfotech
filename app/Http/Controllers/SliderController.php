<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = Slider::all();

        return view('dashboard.pages.allsliders', compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dashboard.pages.add_slider');
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

            'description01'       =>'required|max:255',
            'description02'       =>'required|max:255',
            'slider_image'        =>'image|nullable'
       ]);


        //File Upload

        if ($request->hasFile('slider_image')) {
            
            //get file name with extension
         
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName(); 

            //get File name

            $fileName        = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get Extension

            $extension       = $request->file('slider_image')->getClientOriginalExtension();


            //file name to store ::

            $fileNameToStore = $fileName.'-'.time().$extension;

            //Upload Image

            $path = $request->file('slider_image')->storeAs('/public/slider_images',                $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }

       //Create a Slider Istance and save to DB:

            $slider = new Slider();

            $slider->slider_upper_description   = $request->description01;

            $slider->slider_lower_description   = $request->description02;

            $slider->slider_image               = $fileNameToStore;

            $slider->slider_status              = 1;

            $slider->save();

            return redirect('/sliders')->with('success', 'Slider has been added Successfully');
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

    public function deactivate(Request $request, $id){

        $slider = Slider::findOrFail($id);

        $slider->slider_status = 0;

        $slider->update();

        return redirect('/sliders')->with('success', 'Slider has been deactivated successfully');

    }


    public function activate(Request $request, $id){

        $slider = Slider::findOrFail($id);

        $slider->slider_status = 1;

        $slider->update();

        return redirect('/sliders')->with('success', 'Slider has been activated successfully');
    }


   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('dashboard.pages.slider_edit')->withslider($slider);
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
        $request->validate([

            'description01'       =>'required|max:255',

            'description02'       =>'required|max:255',

            'slider_image'        =>'image|nullable'
       ]);


        //File Upload

        if ($request->hasFile('slider_image')) {
            
            //get file name with extension
         
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName(); 

            //get File name

            $fileName        = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //get Extension

            $extension       = $request->file('slider_image')->getClientOriginalExtension();


            //file name to store ::

            $fileNameToStore = $fileName.'-'.time().$extension;

            //Upload Image

            $path = $request->file('slider_image')->storeAs('/public/slider_images',                $fileNameToStore);

        }else{

            $fileNameToStore = 'noimage.jpg';
        }

       //Create a Slider Istance and save to DB:

            $slider = new Slider();

            $slider->slider_upper_description   = $request->description01;

            $slider->slider_lower_description   = $request->description02;

            $slider->slider_image               = $fileNameToStore;

            $slider->update();

            return redirect('/sliders')->with('success', 'Slider has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $slider = Slider::findOrFail($id);

        if ($slider->slider_image != 'noimage.jpg') {
            
            \Storage::delete('public/slider_images/'.$slider->slider_image);

        }

        $slider->delete();

        return redirect('/sliders')->with("success", "The Slider has been successfully deleted");
    }
}
