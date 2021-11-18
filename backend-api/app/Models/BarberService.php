<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarberService extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barberServices';
    
    protected $fillable = [
        'id_barber', 
        'name', 
        'price'
    ];
}
