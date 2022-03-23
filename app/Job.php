<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'job_title',
        'job_type',
        'company_name',
        'country',
        'posted_date',
        'experience',
        'salary',
        'description',
    ];
}
