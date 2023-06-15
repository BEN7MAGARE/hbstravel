<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    Protected $guarded = [];
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
    
    public function roomStays()
    {
        return $this->hasMany(RoomStay::class);
    }
}
