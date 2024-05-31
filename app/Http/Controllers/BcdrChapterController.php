<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BcdrChapterController extends Controller
{
    public function index(){
        return view('chapter.bcdrchapterpage');
    }

    public function getFile()
    {
        $filePath = 'app\private\private\uploads\Week 4 - Project Initiation.pdf'; // Replace 'your_file_name.ext' with the actual file name
        $fileContents = Storage::disk('private')->get($filePath);

        return response()->make($fileContents, 200, [
            'Content-Type' => 'application/pdf',
            //'Content-Type' => Storage::mimeType($filePath),
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }
}
