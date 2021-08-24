<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    function facilityCategories()
    {
        return $this->hasMany('App\FacilityCategory');
    }
}
