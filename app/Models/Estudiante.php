<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes'; 

    protected $primaryKey = 'id'; 

    public $timestamps = false; 

    protected $fillable = ['nombre', 'email', 'fecha_registro'];

}
