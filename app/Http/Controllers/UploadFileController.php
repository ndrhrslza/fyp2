<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller {
  /* public function index() {
      return view('uploadfile');
   }
   public function showUploadFile(Request $request) {
      $file = $request->file('file');

      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';

      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';

      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';

      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';

      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();

      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
   }*/


    public function upload()
    {
        return view('uploadfile');

    }
    public function uploadPost(Request $request)
{
    if ($request->hasFile("filename")) {
        $file = $request->file("filename");

        $path = Storage::disk('private')->putFileAs('private\uploads', $file, $file->getClientOriginalName());

        // Check if file was stored successfully

        if ($path) {
            return redirect()->back()->with('message', 'File Upload Success');
        } else {
            return redirect()->back()->with('message', 'Failed to upload file');
        }
    } else {
        return redirect()->back()->with('message', 'No file uploaded');
    }
        /*if ($path) {
            echo "File Upload Success";
        } else {
            echo "Failed to upload file";
        }
    } else {
        echo "No file uploaded";
    }*/

        // Display File Name
      /*  echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        // Display File Extension
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        // Display File Real Path
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        // Display File Size
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        // Display File Mime Type
        echo 'File Mime Type: ' . $file->getMimeType();

        $destinationPath = "uploads";
        if ($file->move($destinationPath, $file->getClientOriginalName())) {
            echo "File Upload Success";
        } else {
            echo "Failed to upload file";
        }
    } else {
        echo "No file uploaded";
    }*/
}




}


