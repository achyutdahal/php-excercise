<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectUploadController extends Controller {

    /**
     * Page to display the HTML form for the XML upload
     * @return View
     */
    public function index() {
        return view('projectupload.index');
    }

    /**
     * Uploads an XML file for a project and persists on the database
     * @param Request $request
     */
    public function upload(Request $request) {
        try {
            $request->validate([
                'projectxml' => 'required|mimes:application/xml',
            ]);
            $path = $request->file('projectxml');
            $pathInfo = $path->path();
            
            $projectObj = new Project;
            $projectObj->createProjectsFromFile($pathInfo);
            
            \Illuminate\Support\Facades\Session::flash('success', 'Saved all the projects');
            return redirect('/');
        } catch (\Exception $ex) {
            \Illuminate\Support\Facades\Session::flash('error', 'Something went wrong. Please try again');
            Log::info('UploadError ' . $ex->getMessage());
            return redirect('/');
        }
    }

}
