<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*especifica la tabla que yo quiera de la base de datos sin seguir el esquema de nombres del framework*/
    protected $stable='alumnos';
    
}
