<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        "first_name",
        "middle_name",
        "last_name",
        "birthdate",
        "email",
        "phone_number",
        "address"
    ];
}
