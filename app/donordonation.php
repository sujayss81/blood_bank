<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donordonation extends Model
{
    //
    public $timestamps = false;
    protected $table = 'donordonation';
    protected $fillable = ['d_id','bt_id','quantity'];
    protected $primarykey = ['d_id','bt_id'];
}
