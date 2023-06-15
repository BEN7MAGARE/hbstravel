<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    Protected $guarded = [];

    public function scopeHasCoordinates($query)
    {
        return $query->whereNotNull('longitude')->whereNotNull('latitude');
    }

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
