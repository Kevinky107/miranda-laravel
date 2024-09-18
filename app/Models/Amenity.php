<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room_id'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
