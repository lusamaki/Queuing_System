<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedbackcontroller extends Controller
{
    public function showForm()
    {
        return view('feedback');
    }
}

