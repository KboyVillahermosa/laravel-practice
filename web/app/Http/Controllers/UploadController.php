<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,docx|max:2048', // 2MB limit
        ]);

        // Save the file with original name and timestamp
        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('documents', $fileName, 'public');

        // Save data to the database with error handling
        try {
            Document::create([
                'title' => $validatedData['title'],
                'department' => $validatedData['department'],
                'file_path' => $filePath,
            ]);

            return redirect()->back()->with('success', 'Document uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to upload document: ' . $e->getMessage());
        }
    }
}
