<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function report()
    {
        return $this->hasMany(Report::class,'user_id');
    }
    public function visual()
    {
        return $this->hasMany(Visual::class,'user_id');
    }
    public function vehicle()
    {
        return $this->hasMany(Vehicle::class,'user_id');
    }
    public function cabin()
    {
        return $this->hasMany(Cabin::class,'user_id');
    }
}
