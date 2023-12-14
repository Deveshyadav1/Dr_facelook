<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\User;

use App\Models\User_appointment;
use App\Models\Doctor;
use App\Models\Patient;


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




    public function appointment_status()
    {
        return view('doctor.appointment_status');
    }


    public function patients()
    {
        $doctorId = Auth::user()->id;

        $patients = DB::table('patients')
    ->join('users', 'patients.user_id', '=', 'users.id')
    ->select('users.*')
    ->where('patients.doctor_id', '=', $doctorId)
    ->get();

    $patient_count = count($patients);
      

    // echo "<pre>";
    // print_r($patients);die();

        return view('doctor.patients',['patients' => $patients,'patient_count' => $patient_count]);
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

    public function pharmacy_vendor()
    {
        return view('doctor.pharmacy_vendor');
    }

      public function dynamic_appointment()
    {
        return view('doctor.dynamic_appointment');
    }

}
