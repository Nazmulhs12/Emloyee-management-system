<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function countries(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function city(){
        return $this->hasMany(City::class);
    }
    public function employees () {
        return $this->hasMany(Employee::class);
    }
}
