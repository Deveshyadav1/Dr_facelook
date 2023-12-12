<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Free_appointment extends Model
{
    use HasFactory;

    protected $table = 'free_appointments'; // Specify the table name if different from the model name

    protected $fillable = ['name','email','date','checkup_type','doctor_id','number','message'];
}
