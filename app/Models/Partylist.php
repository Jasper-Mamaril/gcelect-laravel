<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partylist extends Model
{
    use HasFactory;

    // protected $primaryKey = "partylist_id";

    public function members(){
        return $this->hasMany(Member::class);
    }
}
