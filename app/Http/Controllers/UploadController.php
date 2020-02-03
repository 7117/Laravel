<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if($request->isMethod('POST')){
            $file=$request->file();
        }

        return view('upload.upload');
    }


}
