<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentrosEducativos extends Model
{
   // use HasFactory;
   protected $table="centroEducativo";
   protected $primaryKey="IdCentro";
   protected $fillable=[
    'Nombre','CodigoUnico','Departamento','Municipio'
   ];

   public $timestamps=false;
}
