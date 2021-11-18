<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberReview extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barberReviews';
    
    protected $fillable = [
        'id_barber', 
        'rate'
    ];
}
