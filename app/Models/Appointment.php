<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    protected $table = 'appointments'; // Specify the table name if different from the model name

    protected $fillable = ['title', 'date','members','meet_id','status']; // Define the columns that can be mass-assigned

}
