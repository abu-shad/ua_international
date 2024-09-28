<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'requirements',
        'responsibilities',
        'company',
        'location',
        'salary_min',
        'salary_max',
        'employment_type',
        'experience_level',
        'education_level',
        'industry_id',
        'job_type',
        'posted_at',
        'expires_at',
        'application_deadline',
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
