<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country_code',
        'state_code',
        'destination_code',
        'zone_code',
        'longitude',
        'latitude',
        'category_code',
        'category_group_code',
        'chain_code',
        'accommodation_type_code',
        'postal_code',
        'city',
        'email',
        'license',
        'web',
        'last_update',
        's2c',
        'ranking',
    ];
    
    Protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
