<?php

namespace App;

use Illuminate\Http\Request;

class XmlUploader {

    public function upload(Request $request) {
       
        $file = $request->file('projectxml');
        $pathInfo = $file->path();
        $extension = $file->getClientOriginalExtension();
        if($extension !='xml'){
            return false;
        }
        return $pathInfo;
    }

}
