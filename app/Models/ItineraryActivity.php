<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItineraryActivity extends Model
{
    protected $fillable = [
        'id',
        'itinerary_id',
        'time',
        'title',
        'description',
        'location',
        'type'
    ];    
}
