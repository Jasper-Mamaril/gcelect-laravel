<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    // table
    protected $table = 'admins';
    protected $primaryKey = 'admins_id'; 
    
    protected $fillable = ['admins_fname','admins_lname','admins_domain','admins_pword'];

}
