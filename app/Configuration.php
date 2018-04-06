<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table= 'tbl_admins';

    protected $fillable=['id','admin_id','site_name','admin_amount','amc_amount'];
}
