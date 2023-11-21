<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors'; // Specify the table name if different from the model name

    protected $fillable = ['user_id', 'specialization','qualification','experience']; // Define the columns that can be mass-assigned
}
