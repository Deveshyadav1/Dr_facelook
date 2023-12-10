<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients'; // Specify the table name if different from the model name

    protected $fillable = ['user_id','doctor_id', 'is_active'];
}
