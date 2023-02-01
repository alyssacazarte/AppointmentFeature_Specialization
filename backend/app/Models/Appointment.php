<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'full_name',
        'address',
        'phone_number',
        'email',
        'type_of_service',
        "price",
        "clothes_weight",
        "total_payment",
        "available_time",
        "available_date",
    ];

    use HasFactory;
}
