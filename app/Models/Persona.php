<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function eps()
    {
        return $this->belongsTo(EPS::class, 'eps_id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'persona_id');
    }
}
