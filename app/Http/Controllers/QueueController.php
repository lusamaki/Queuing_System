<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QueueController extends Controller
{
    public function getQueueDetailsView(Request $request)
    {
        $nb_patients = Queue::where('service', $request->service)->count();
        $service = $request->service == "general_doctor" ? "General Doctor" : ucwords($request->service);
        return view('queue_details', ['service' => $service, 'nb_patients' => $nb_patients]);
    }

    public function getQueueView(Request $request)
    {
        // Determine the service type
        $service = $request->service == "General Doctor" ? 'general_doctor' : strtolower($request->service);

        // Prepare data for the new queue entry
        $data = [
            'username' => Session::get('user.username'),
            'service' => $service,
            'status' => 'on_queue',
            'estimated_waiting_time' => $service == 'general_doctor' ? 5 : ($service == 'optician' ? 4 : 3),
        ];

        $isUserInQueue = Queue::where('username', Session::get('user.username'))->get()->count() > 0 ? true : false;

        if (! $isUserInQueue) {
            // Create and save the new queue entry
            $queueModel = new Queue();
            $queueModel->username = $data['username'];
            $queueModel->service = $data['service'];
            $queueModel->status = $data['status'];
            $queueModel->estimated_waiting_time = $data['estimated_waiting_time'];
            $queueModel->save();

            // Get the number of patients for the service
            $nb_patients = Queue::where('service', $service)->count();

            // Sum the estimated waiting time for patients on queue for the specific service
            $total_time = Queue::where('service', $service)->where('status', 'on_queue')->sum('estimated_waiting_time');

            // Return the view with the data
            return view('queue_view', ['nb_patients' => $nb_patients, 'estimated_waiting_time' => $total_time, 'service' => $service]);
        } else {
            echo '<script> alert("User is already in queue !"); </script>';
            return view('starter');
        }
    }
}
