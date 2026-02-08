<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'tour_id',
        'booking_date',
        'participants',
        'total_price',
        'payment_status'
    ];    
}
