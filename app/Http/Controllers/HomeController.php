<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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


                     $doctor_id = Auth::user()->id;
                     $today = Carbon::today();
                        
                        // Return all Appoientments for doctor role
                        // $appointments = DB::table('user_appointments')
                        // ->join('users', 'user_appointments.user_id', '=', 'users.id')
                        // ->select('user_appointments.*', 'users.name', 'users.email', 'users.phone', 'users.address', 'users.avatar')
                        // ->where('user_appointments.doctor_id', '=',$doctor_id) // Adding the where condition
                        // ->get();


                     $appointments = DB::table('user_appointments')
                        ->join('users', 'user_appointments.user_id', '=', 'users.id')
                        ->select('user_appointments.*', 'users.name', 'users.email', 'users.phone', 'users.address', 'users.avatar')
                        ->where('user_appointments.doctor_id', '=', $doctor_id)
                        ->orderByDesc('user_appointments.id') // Assuming 'id' is a primary key column, you can replace it with any column you want
                        ->get();



                         // Return todays appoientment for doctors role
                        // Get the count of appointments for today for the current logged-in doctor
                        $todays_appoientment_count = User_appointment::where('date', now()->toDateString())
                            ->where('doctor_id', $doctor_id)
                            ->count();

                        //Return all Patients for doctor role
                        $patients = DB::table('patients')
                            ->join('users', 'patients.user_id', '=', 'users.id')
                            ->select('users.*')
                            ->where('patients.doctor_id', '=', $doctor_id)
                            ->orderByDesc('patients.id')
                            ->get();  
                            
                         
                        //Return Todays Register patisant  
                        $todays_patients = DB::table('patients')
                        ->join('users', 'patients.user_id', '=', 'users.id')
                        ->select('users.*')
                        ->where('patients.doctor_id', '=', $doctor_id)
                        ->whereDate(DB::raw('DATE(patients.created_at)'), '=', $today)
                        ->get();   

                         $todays_patients_count = count($todays_patients);   

                         




                    // $_SESSION['active_doctor'] = 1;

                    return view('doctor.home', ['appointments' => $appointments, 
                                                'todays_appoientment_count' => $todays_appoientment_count,
                                                'patients' => $patients,
                                                'todays_patients' => $todays_patients,
                                                'todays_patients_count' => $todays_patients_count
                ]);
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
     

       $user_id = $request->user_id;
       $doctor_id = $request->doctor_id;

       
       
        $existingRecord = Patient::where('user_id', $user_id)->where('doctor_id', $doctor_id)->first();

        if (!$existingRecord) {
            
            // Record doesn't exist, create a new record
        $newRecord = new Patient();
        $newRecord->user_id = $user_id;
        $newRecord->doctor_id = $doctor_id;
        $newRecord->is_active = "1";
        
        // You can set other attributes as needed

         $newRecord->save();
        
        }

        

        // return response()->json(['message' => 'Record created successfully']);

         

        User_appointment::create($request->all());

        // Return a response (you can customize this based on your needs)
        return response()->json(['message' => 'Appointment Booked successfully']);
    }

    public function news(){
        return view('user.news');
    }

    public function free_appointment()
    {
        return view('user.free_appointment');
    }






}
