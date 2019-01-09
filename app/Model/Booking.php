<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = ['name', 'email', 'phone', 'date', 'time_start', 'time_end'];
}
