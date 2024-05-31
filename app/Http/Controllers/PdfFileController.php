<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PdfFileController extends Controller
{
    public function index()
    {
        $pdfFiles = PdfFile::all();
        return view('admin.pdf_files.index', compact('pdfFiles'));
    }

    public function create()
    {
        return view('admin.pdf_files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
            'chapter' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $directory = 'public/upload_pdfs';
        $originalName = $request->file('pdf')->getClientOriginalName();
        $uniqueFileName = uniqid() . '_' . $originalName;
        $path = $request->file('pdf')->storeAs($directory, $uniqueFileName);

        PdfFile::create([
            'file_path' => $uniqueFileName,
            'file_name' => $originalName,
            'chapter' => $request->input('chapter'),
            'course' => $request->input('course'),
            'category' => $request->input('category'),
        ]);

        return redirect()->route('pdf_files.index')->with('status', 'PDF uploaded successfully!');
    }

    public function destroy($id)
    {
        // Storage::delete($pdfFile->file_path);
        // $pdfFile->delete();

        $pdfFile = PdfFile::findOrFail($id);
        $pdfFile->delete();

        return redirect()->route('uploadFiles.index')->with('status', 'PDF deleted successfully!');
    }
}
