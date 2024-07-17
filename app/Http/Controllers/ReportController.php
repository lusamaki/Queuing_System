<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function viewReports()
    {
        //$reports = Report::all(); // Fetch all reports (adjust as per your logic)

    return view('reports');//, compact('reports'));
}
}