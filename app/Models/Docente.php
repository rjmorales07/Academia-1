<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['nombre','apellido','titulouniv','edad','fecha','foto','documento'];
    use HasFactory;
}
