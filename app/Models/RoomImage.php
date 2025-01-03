<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomImage extends Model
{
    protected $guarded = ['id'];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}

