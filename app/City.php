<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function states(){
        return $this->belongsTo(State::class,'state_id');
    }
    public function employess () {
        return $this->hasMany(Employee::class);
    }
}
