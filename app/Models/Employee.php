<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $guarded = [];
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function State()
    {
        return $this->belongsTo(country::class);
    }
    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
