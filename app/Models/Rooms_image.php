<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rooms_image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'room_id'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
