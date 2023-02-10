<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(Driver::class,'user_id');
    }
}
