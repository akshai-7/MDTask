<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function vehicle()
    {
        return $this->hasMany(Vehicle::class,'user_id');
    }
    protected $fillable = [
        'driver_id',
        'view',
        'image',
        'feedback',
        'action'
        ];

        public function driver()
        {
            return $this->belongsTo(Driver::class);
        }
}
