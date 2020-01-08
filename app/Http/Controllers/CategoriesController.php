<?php

namespace MANZ\Http\Controllers;

use MANZ\categories;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

      $categories = categories::all();
         return view('categories')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
      return view('addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'catname' => 'required'
        ]);

         $category = categories::create([
            'cat_name' => $request->catname
        ]);


        Session::flash('success','New Data Added Successfully!..');
        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \MANZ\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MANZ\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = categories::find($id);
        return view('editcategory')->with('category',$category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MANZ\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
       $this->validate($request, [
            'catname' => 'required'
        ]);
       $category = categories::find($id);
       $category->cat_name = $request->catname;
       $category->save();

        Session::flash('success','New Data Updated Successfully!..');
        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MANZ\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $category = categories::find($id);
        $category->delete();
        Session::flash('success','Data Deleted Successfully!..');
        return redirect()->route('categories');
    }
}
