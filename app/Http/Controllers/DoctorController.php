<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\User;

use App\Models\User_appointment;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function appointment()
    {
        $doctor_id = Auth::user()->id;

        $appointments = DB::table('user_appointments')
        ->join('users', 'user_appointments.user_id', '=', 'users.id')
        ->select('user_appointments.*', 'users.name', 'users.email', 'users.phone', 'users.address', 'users.avatar')
        ->where('user_appointments.doctor_id', '=',$doctor_id) // Adding the where condition
        ->get();

// You can now use $appointments in your view

    // $appointments = User_appointment::orderBy('id','DESC')->get(); // Fetch all appointments

    return view('doctor.appointment', ['appointments' => $appointments]);

    }




    //  public function create_appointment(Request $request)
    // {
    //     // Validate the incoming data, save it to the database, and send a response.
    //     // You can access the data using $request->input('key'), where 'key' is the form input field name.

    //      /*echo "123";die();*/

    //      echo $request->all();die;


    //     // Example: Save the appointment data
    //     $appointment = new User_appointment();

    //     $appointment->title = $request->input('title');
    //     $appointment->date = $request->input('datetime');
    //     $appointment->save();

    //     return response()->json(['message' => 'Appointment created successfully']);
    // }




    public function appointment_status()
    {
        return view('doctor.appointment_status');
    }


    public function appointment_type()

    {
        return view('doctor.appointment_type');
    }

    public function doctors(){

        $data = User::select('*')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*', 'doctors.specialization','doctors.user_id', 'doctors.qualification', 'doctors.experience')
        ->get();

        return view('doctors_list',['data'=>$data]);

    }

}
