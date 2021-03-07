<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competcat extends Model
{

    public function competitions(){
        return $this->hasMany(Competition::class);
    }
}
