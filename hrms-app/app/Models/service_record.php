<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_record extends Model
{
    use HasFactory;

    protected $table = service_record;
    protected $fillable = [
        "emp_id",
        "service-from",
        "service-to",
        "designation",
        "status",
        "station",
        "absence-wop",
        "separation-date-cause-remarks"
        ];
        
}
