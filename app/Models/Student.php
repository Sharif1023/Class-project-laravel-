<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- import করা লাগবে

class Student extends Model
{
    use HasFactory; // <-- trait ব্যবহার

    protected $fillable = [
        'name',
        'roll',
        'class',
        'section',
        'dob',
        'email',
    ];
}
