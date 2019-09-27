<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloodtype extends Model
{
    //
    protected $table = 'bloodtype';
    protected $fillable = ['quantity'];
    protected $primarykey = 'id';
    public $timestamps = false;
}
