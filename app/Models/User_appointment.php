<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_appointment extends Model
{
    use HasFactory;

     protected $table = 'user_appointments'; // Specify the table name if different from the model name

    protected $fillable = ['user_id', 'name','email','date','checkup_type','number','message']; // Define the columns that can be mass-assigned
}
