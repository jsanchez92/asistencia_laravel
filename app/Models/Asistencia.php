<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table="asistencia";
    protected $primaryKey="Id_Asistencia";
    protected $fillable=[
     'Id_Centro','Id_Matricula','Ambos_Sexos','Femenino','Fecha'
    ];
 
    public $timestamps=false;
}
