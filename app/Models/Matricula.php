<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
   // use HasFactory;
    protected $table="matricula";
    protected $primaryKey="id_Matricula";
    protected $fillable=[
     'Turno','Modalidad','AmbosSexos','Femenino','Id_Centro'
    ];
 
    public $timestamps=false;
}
