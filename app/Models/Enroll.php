<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'regno',
        'phone',
        'idno',
        'country',
        'county',
        'faculty',
        'course_d',
        'yearofenroll',
        'admletter',
        'passport',
        'resultsslip',
        'kcseliving',
        'scannedid',
        'birthcert',

    ];
}
