<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mis4Controller extends Controller
{
    public function index()
    {
        return view('chapter.mis4');
    }

    public function getFile()
    {
        $filePath = 'app\private\private\uploads\Week 4 - Project Initiation.pdf';
        $fileContents = Storage::disk('private')->get($filePath);

        return response()->make($fileContents, 200, [
            'Content-Type' => 'application/pdf',
            //'Content-Type' => Storage::mimeType($filePath),
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }
}
