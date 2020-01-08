<?php

namespace MANZ\Http\Controllers;
use Session;
use MANZ\categories;
use Illuminate\Http\Request;
use MANZ\projects;

class ProjectsController extends Controller
{
   public function index(){
   		$projects = projects::all();
		 return view('projects')->with('projects',$projects);
   }

    public function add(){
    	$categories = categories::all();
    	if ($categories->count() == 0){
    		Session::flash('success','Add category before add Project');
    		return redirect()->back();
    	}

   		return view('addproject')->with('categories', $categories);

   }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'cat_id' => 'required',
            'thumb' => 'required|image'
        ]);

        $thumbanil = $request->thumb;
        $thumb_new_name = time().$thumbanil->getClientOriginalName();
        $thumbanil->move('uploads/projects',$thumb_new_name);
        //dd($request->all()); //Display all Data 
        // $project = new projects;
        // $project->title = $request->title;
        // $project->cat_id = $request->cat_id;
        // $project->description = $request->description;
        // $project->thumb = $request->thumb;
        // $project->save();


         $project = projects::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'categories_id' => $request->cat_id,
            'description' => $request->description,
            'thumb' => $thumb_new_name
        ]);


        Session::flash('success','New Data Added Successfully!..');
        return redirect()->route('projects');
    }

     public function edit($id) {

        $project = projects::find($id);
        $category = categories::all();
        return view('editproject')->with('project',$project)->with('categories', $category);

    }

    public function update(request $request, $id) {

       $this->validate($request, [
           'title' => 'required',
            'cat_id' => 'required'
        ]);
       $project = projects::find($id);

       if($request->hasFile('thumb')){
            $thumbanil = $request->thumb;
            $thumb_new_name = time().$thumbanil->getClientOriginalName();
            $thumbanil->move('uploads/projects',$thumb_new_name);

            $project->thumb = $thumb_new_name;//update db
       }

       $project->title = $request->title;
       $project->categories_id = $request->cat_id;
       $project->description = $request->description;
       $project->save();

        Session::flash('success','New Data Updated Successfully!..');
        return redirect()->route('projects');
    }

      public function destroy($id){

        $project = projects::find($id);
        $project->delete();
        Session::flash('success','Data Deleted Successfully!..');
        return redirect()->route('projects');
    }



}
