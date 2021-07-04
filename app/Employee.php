<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function countries () {
        return $this->belongsTo(Country::class, 'countries_name');
    }
    public function states () {
        return $this->belongsTo(State::class, 'states_name');
    }
    public function cities () {
        return $this->belongsTo(City::class, 'cities_name');
    }
    public function departments () {
        return $this->belongsTo(Department::class, 'departments_name');
    }
    public function divisions () {
        return $this->belongsTo(Division::class, 'divisions_name');
    }
}
