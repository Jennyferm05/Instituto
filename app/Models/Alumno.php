<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public static function rules()
{
    return [
        'persona_id' => 'unique:alumnos,persona_id',
    ];
}
}
