<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchPaper;
use App\Models\Department;
use App\Models\Course;

class ResearchPaperController extends Controller
{
    public function index(Request $request)
    {
        $query = ResearchPaper::query();

        if ($request->has('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        $researchPapers = $query->with('department')->paginate(10);
        return view('dashboard', compact('researchPapers'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
            'course_id' => 'required',
            'file' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        $filePath = $request->file('file')->store('research_papers');

        ResearchPaper::create([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'course_id' => $request->course_id,
            'file_path' => $filePath
        ]);

        return back()->with('success', 'Research paper uploaded successfully.');
    }
}
