<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'offer',
        'available'
    ];

    public function rooms_image(): HasMany
    {
        return $this->hasMany(Rooms_image::class);
    }

    public function amenity(): HasMany
    {
        return $this->hasMany(Amenity::class);
    }
}
