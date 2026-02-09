<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tour;

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
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
