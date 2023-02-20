<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function visual()
    {
        return $this->belongsTo(Visual::class,'user_id');
    }
    protected $fillable = [
        'user_id',
        'view',
        'image',
        'feedback',
        'notes',
        'action'
        ];
}
