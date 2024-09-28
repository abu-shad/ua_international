<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'religion',
        'passport_no',
        'valid_from',
        'valid_to',
        'industry',
        'designation',
        'domestic_exp',
        'oversease_exp',
        'country',
        'state',
        'city',
        'zip',
        'resume',
    ];
}
