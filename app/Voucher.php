<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'giftvouchers';

   protected $fillable=['name','email','mobno','address'];

   protected $hidden= ['dsaId','dsaName','date_of_generation','time','expiration_date','location_id'];
}

            