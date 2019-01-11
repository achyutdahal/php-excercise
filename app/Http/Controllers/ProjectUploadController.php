<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Log;
use App\XmlUploader;

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
                'projectxml' => 'required',
            ]);
            $xmlUploaderService = new XmlUploader();
            $path = $xmlUploaderService->upload($request);
            if (!$path) {
                \Illuminate\Support\Facades\Session::flash('error', 'Please upload xml file.');
                return redirect('/');
            }
            $projectObj = new Project;
            $projectObj->createProjectsFromFile($path);

            \Illuminate\Support\Facades\Session::flash('success', 'Saved all the projects');
            return redirect('/');
        } catch (\Exception $ex) {
            \Illuminate\Support\Facades\Session::flash('error', 'Something went wrong. Please try again');
            Log::info('UploadError ' . $ex->getMessage());
            return redirect('/');
        }
    }

}
