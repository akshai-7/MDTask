<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function visual()
    {
        return $this->belongsTo(Visual::class,'user_id','driver_id');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class,'user_id');
    }
    public function cabin()
    {
        return $this->belongsTo(Cabin::class,'user_id');
    }

}
