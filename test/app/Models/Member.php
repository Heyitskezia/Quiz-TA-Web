<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public $timestamps = false;
    protected $table = "members";
    protected $fillable = ['username', 'email', 'password'];
    protected $guarded = []; // If using fillable, the guarded is empty. If using guarded, the fillable is empty 

//    public function team() {
//  	return $this->belongsTo('App\Model\Team', 'team_id');
//  }
}
