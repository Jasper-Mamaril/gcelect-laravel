<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use HasFactory;

    protected $table = 'positions';
 
    protected $fillable = ['candidate_id'];

    public function candidates(){
        return $this->hasMany(Candidates::class);
    }
}