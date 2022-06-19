<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected  $table = "teacher";
     protected $fillable = ['first_name', 'last_name', 'email', 'photo', 'course_specialist', 'skills', 'mobile', 'city', 'state', 'zip', 'address', 'facebook', 'twitter', 'gmail', 'linkdin', 'about', 'specification'];   
    // All fields inside $fillable array can be mass-assigned  
}
