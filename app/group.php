<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function services(){
        return $this->belongsToMany('App\Service','group_has_services');
    }
}
