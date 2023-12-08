<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Appointment;
use App\Models\Doctor;

use App\Models\User_appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0') {

                return view('user.home');
            }
               elseif (Auth::user()->usertype=='1') {

                    // $_SESSION['active_doctor'] = 1;
                    return view('doctor.home');
            }
            else
            {
                // return Redirect::to(route('/admin'));   Reserved For Sub admin
            }

        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        $doctors = User::select('*')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->select('users.*', 'doctors.specialization','doctors.user_id', 'doctors.qualification', 'doctors.experience')
        ->get();

      return view('user.home',['doctors' => $doctors]);
    }



 public function submit_user_appointment(Request $request)
    {
        // No need for server-side validation in this example

        // Store the data in the 'user_appointment' table
        User_appointment::create($request->all());

        // Return a response (you can customize this based on your needs)
        return response()->json(['message' => 'Appointment Booked successfully']);
    }

    public function news(){
        return view('user.news');
    }






}
