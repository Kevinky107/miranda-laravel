<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest',
        'picture',
        'orderdate',
        'checkin',
        'checkout',
        'note',
        'status',
        'roomid'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
