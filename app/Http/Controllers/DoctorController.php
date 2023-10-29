<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Appointment;


class DoctorController extends Controller
{
    public function appointment()
    {
    
    $appointments = Appointment::orderBy('id','DESC')->get(); // Fetch all appointments

    return view('doctor.appointment', ['appointments' => $appointments]);

    }

    
     public function create_appointment(Request $request)
    {
        // Validate the incoming data, save it to the database, and send a response.
        // You can access the data using $request->input('key'), where 'key' is the form input field name.
         
         /*echo "123";die();*/
       
        // Example: Save the appointment data
        $appointment = new Appointment();
        $appointment->title = $request->input('title');
        $appointment->date = $request->input('datetime');
        $appointment->save();

        return response()->json(['message' => 'Appointment created successfully']);
    }
    
    public function appointment_status()
    {
        return view('doctor.appointment_status');
    }
    

    public function appointment_type()
    {
        return view('doctor.appointment_type');
    }

}
