<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    
    public function competition(){
        return $this->belongsTo(Competition::class);
    }
}
