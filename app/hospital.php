<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    //
    protected $table = 'hospital';
    protected $fillable = ['bt_id','b_group','quantity','h_name','o_date'];
    protected $primarykey = 'id';
    public $timestamps = false;
}
