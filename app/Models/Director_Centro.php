<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director_Centro extends Model
{
    protected $table="director_centro";
    protected $primaryKey="ID";
    protected $fillable=[
     'Id_Centro','Id_Director'
    ];
 
    public $timestamps=false;
}
