<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all documents grouped by department
        $documents = Document::with('department')->get()->groupBy('department.name');

        return view('dashboard', compact('documents'));
    }
}
