<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'country_id', 'id');
    }
}
