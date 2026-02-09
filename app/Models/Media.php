<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tour;
use App\Models\Destination;

class Media extends Model
{
    protected $fillable = [
        'tour_id',
        'destination_id',
        'type',
        'url',
        'description'
    ]; 

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    } 
    
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }     
}
