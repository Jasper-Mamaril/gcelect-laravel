<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;
     // table
     protected $table = 'positionss';
 
     protected $fillable = ['position_name'];
 
     public function candidates(){
         return $this->hasMany(Candidates::class);
     }
}
