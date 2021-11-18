<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberPhoto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barberPhoto';
    
    protected $fillable = [
        'id_barber', 
        'url'
    ];
}
