<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectUploadController extends Controller {

    /**
     * Page to display the html form for the xml upload
     * @return View
     */
    public function index() {
        return view('projectupload.index');
    }

    /**
     * R
     * @param Request $request
     */
    public function upload(Request $request) {
        
        $validatedData = $request->validate([
            'projectxml' => 'required',
        ]);
        
       
        $path = $request->file('projectxml');
        $pathInfo = $path->path();
        $xml = simplexml_load_file($pathInfo);
        foreach ($xml->project as $item) {
            \App\Project::updateOrCreate(['name' => $item->name], ['description' => addslashes($item->description)]);
        }
        \Illuminate\Support\Facades\Session::flash('success', 'Saved all the projects'); 
        return redirect('/');
    }

}
