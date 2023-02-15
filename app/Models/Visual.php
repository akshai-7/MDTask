<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(Driver::class,'user_id');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class,'user_id');
    }
}
