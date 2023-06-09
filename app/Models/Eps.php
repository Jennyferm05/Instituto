<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasMany(Usuario::class, 'eps_id');
    }
}
