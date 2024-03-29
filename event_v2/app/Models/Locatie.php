<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locatie extends Model
{
    use HasFactory;

    protected $table = 'locaties';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function events(): hasMany
    {
        return $this->hasMany(Event::class);
    }
}
