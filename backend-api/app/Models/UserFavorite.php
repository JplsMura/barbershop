<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'userFavorites';
    
    protected $fillable = [
        'id_user', 
        'id_barber'
    ];
}
