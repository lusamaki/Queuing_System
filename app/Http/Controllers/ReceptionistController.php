<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient; // Replace with your actual Patient model

class ReceptionistController extends Controller
{
    public function index()
    {
        // Example: Fetch patients in a specific queue (adjust as per your logic)
        //$patients = Patient::where('queue_id', 1)->get();

        return view('receptionist');//, compact('patients'));
    }

   // public function assignRoom(Request $request, $patientId)
   // {
        // Logic to assign room to patient with $patientId
        // Example: Update patient's room assignment in the database
        //$patient = Patient::findOrFail($use_Id);
        //$patient->room_number = $request->input('room_number');
       // $patient->save();

       // return redirect()->back()->with('success', 'Room assigned successfully!');
   // }

   
}
