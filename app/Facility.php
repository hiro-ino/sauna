<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    function user()
    {
        return $this->belongsTo('App\User');
    }
    function facilityCategories()
    {
        return $this->hasMany('App\FacilityCategory');
    }
}

