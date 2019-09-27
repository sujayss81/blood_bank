<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    //
    protected $table = 'donation';
    protected $fillable = ['donor_id','bt_id','quantity','d_date'];
    protected $primarykey = 'id';
    public $timestamps = false;
}
