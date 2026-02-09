<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Itinerary;

class ItineraryActivity extends Model
{
    protected $fillable = [
        'itinerary_id',
        'time',
        'title',
        'description',
        'location',
        'type'
    ];

    /**
     * An activity belongs to an itinerary
     */
    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }
}
