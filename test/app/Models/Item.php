<!-- NOT FINISHED-->

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public $timestamps = false;
    protected $table = "items";
    protected $fillable = ['name', 'stock', 'price'];
    protected $guarded = []; 
}
