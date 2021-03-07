<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{

    public function applications(){

        return $this->hasMany(Application::class);
    }

    public function competcat(){
        return $this->belongsTo(Competcat::class);
    }
}
