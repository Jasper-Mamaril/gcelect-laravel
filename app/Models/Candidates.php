<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;
    // table
    protected $table = 'candidates';

    protected $fillable = ['candidate_fname','candidate_lname','partylist_id','position_id','candidate_program','candidate_yrlevel'];

    public function partylist(){
        return $this->belongsTo(Partylists::class);
    }

    public function vote(){
        return $this->belongsTo(Vote::class);
    }
}
