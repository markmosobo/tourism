<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'tour_id',
        'destination_id',
        'type',
        'url',
        'description'
    ];    
}
