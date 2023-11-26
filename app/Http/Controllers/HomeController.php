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

                    return view('doctor.home');
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }



    public function index()
    {
        $doctors = User::where('usertype', 1)->get();

      return view('user.home',['doctors' => $doctors]);
    }



 public function submit(Request $request)
    {
        // No need for server-side validation in this example

        // Store the data in the 'user_appointment' table
        User_appointment::create($request->all());

        // Return a response (you can customize this based on your needs)
        return response()->json(['message' => 'Appointment Booked successfully']);
    }






}
