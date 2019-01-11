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

        $path = $request->file('projectxml');
        $pathInfo = $path->path();
        $xml = simplexml_load_file($pathInfo);
        foreach ($xml->project as $item) {
            \App\Project::updateOrCreate(['name' => $item->name], ['description' => addslashes($item->description)]);
        }
    }

}
