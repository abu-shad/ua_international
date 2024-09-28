<?php

namespace App\Models;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
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
        'job_image'
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
