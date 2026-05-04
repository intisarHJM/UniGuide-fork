<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ScholarshipController extends Controller
{
    public function index(Request $request)
    {
        // Get the GPA from the search input
        $gpa = $request->query('gpa');

        // If user entered a GPA, filter. Otherwise, show all.
        if ($gpa) {
            // Note: 'min_gpa' must match your database column name
            $scholarships = Scholarship::where('min_gpa', '<=', $gpa)->get();
        } else {
            $scholarships = Scholarship::all();
        }

        return view('scholarships', ['scholarships' => $scholarships]);
    }


    public function show(Scholarship $scholarship)
{
    // Laravel automatically finds the scholarship by the ID in the URL
    return view('scholarships-show', ['scholarship' => $scholarship]);
}
}
