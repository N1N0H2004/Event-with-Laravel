<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;

    protected $with = ['locatie'];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function locatie(): belongsTo
    {
        return $this->belongsTo(Locatie::class);
    }
}
