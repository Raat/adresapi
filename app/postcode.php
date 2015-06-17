<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postcode extends Model
{
	//Table for this model
    protected $table = 'postcode';
    //hidden fields for json response
    protected $hidden = ['id', 'postcode_id', 'city_id', 'municipality_id','location_detail'];
}
