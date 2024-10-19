<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;

    protected $table = 'publicaciones';

    protected $fillable = ['titulo','descripcion', 'fecha_creacion','id_tipo','id_persona','contenido','img'];

}
