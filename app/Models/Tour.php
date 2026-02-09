<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Destination;

class Tour extends Model
{
    protected $fillable = [
        'title',
        'description',
        'destination_id',
        'duration_days',
        'price',
        'start_date',
        'end_date',
        'max_participants',
        'availability_status'
    ];  
    
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }    
}
