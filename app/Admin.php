<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='tbl_webusers'; 

       $fillable = [ 'name', 'email','password','phone' ];

    protected $hidden = ['userId'];
}
