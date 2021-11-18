<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberAvailability extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'baberAvailability';
    
    protected $fillable = [
        'id_barber', 
        'weekday',
        'hours'
    ];
}
