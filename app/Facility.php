<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
//    use HasFactory;
    function facilityCategories()
    {
        return $this->hasMany('App\FacilityCategory');
    }
}
