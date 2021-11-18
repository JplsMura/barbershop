<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barbers';
    
    protected $fillable = [
        'name', 
        'avatar', 
        'stars', 
        'latitude',
        'longitude'
    ];
}
