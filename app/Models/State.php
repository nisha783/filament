<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable =[
        'country_id',
        'name',
    ];
    public function country()
    {
        return $this->belongsTo(country::class);
    }
    public function employees()
    {
        return $this->hasMany(employee::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
