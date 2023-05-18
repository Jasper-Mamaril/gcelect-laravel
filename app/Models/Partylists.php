<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partylists extends Model
{
    use HasFactory;
    // table
    protected $table = 'partylists';
    protected $primaryKey = 'partylists_id';

    protected $fillable = ['partylists_name','partylist_logo'];

    public function members(){
        return $this->hasMany(Members::class);
    }
}
