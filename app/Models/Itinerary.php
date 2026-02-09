<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tour;
use App\Models\ItineraryActivity;

class Itinerary extends Model
{
    protected $fillable = [
        'tour_id',
        'day_number',
        'title',
        'description'
    ];  
    
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    } 
    
    /**
     * An itinerary has many activities
     */
    public function activities()
    {
        return $this->hasMany(ItineraryActivity::class);
    }    
}
