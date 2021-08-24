<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facility extends Model
{
    function user()
    {
        return $this->belongsTo('App\User');
    }
}
