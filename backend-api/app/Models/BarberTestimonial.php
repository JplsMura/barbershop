<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberTestimonial extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barberTestimonials';
    
    protected $fillable = [
        'id_barber', 
        'name', 
        'rate', 
        'body'
    ];
}
