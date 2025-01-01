<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable =[
        'code',
        'phonecode',
        'name',
    ];
    public function states()
    {
        return $this->hasMany(state::class);
    }
   
    public function Employees()
    {
        return $this->hasMany(Employee::class);
    }
    
}
