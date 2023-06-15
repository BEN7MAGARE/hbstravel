<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory;
    Protected $guarded = [];

    public function groupZones()
    {
        return $this->hasMany(GroupZone::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
