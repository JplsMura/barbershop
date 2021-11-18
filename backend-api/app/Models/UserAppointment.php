<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAppointment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'userAppointments';
    
    protected $fillable = [
        'id_user', 
        'id_barber', 
        'ap_datetime'
    ];
}
