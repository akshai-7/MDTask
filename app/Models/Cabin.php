<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    protected $fillable = [
        'driver_id',
        'view',
        'image',
        'feedback',
        'notes',
        'action'
        ];
        public function driver()
        {
            return $this->belongsTo(Driver::class);
        }

}
