<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_record extends Model
{
    use HasFactory;

    protected $table = 'service_records';

    protected $fillable = [
        'employee_id',
        'service_from',
        'service_to',
        'designation',
        'status',
        'salary',
        'station',
        'absence_wop',
        'separation_date_cause_remarks',
    ];
}
