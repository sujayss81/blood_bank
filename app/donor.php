<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    //
    protected $table = 'donor';
    protected $primarykey = 'id';
    protected $fillable = ['fname','lname','dob','gender','address','contact','password'];
    // protected $notnull = ['fname','lname','dob','gender','address','contact','password'];
}
