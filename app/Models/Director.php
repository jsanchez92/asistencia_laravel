<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table="Directores";
    protected $primaryKey="Id_Director";
    protected $fillable=[
     'Nombres','Apellidos','User','Pass'
    ];
 
    public $timestamps=false;
}
