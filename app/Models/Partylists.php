<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partylists extends Model
{
    use HasFactory;
    // table
    protected $table = 'partylists';

    protected $fillable = ['partylists_name'];

    public function candidates(){
        return $this->hasMany(Candidates::class);
    }
}
