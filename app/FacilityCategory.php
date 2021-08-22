<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityCategory extends Model
{
    function facility()
    {
        return $this->belongsTo('App\Facility');
    }
}
