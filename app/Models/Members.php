<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    // table
    protected $table = 'members';
    protected $primaryKey = 'members_id';

    protected $fillable = ['members_fname','members_lname','members_position','members_picture'];

    public function partylist(){
        return $this->belongsTo(Partylists::class);
    }

}
