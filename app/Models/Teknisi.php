<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teknisi extends Model
{
    protected $table = 'teknisis';

    protected $fillable = [
        'user_id',
        'teknisi_code',
        'alamat',
        'wilayah',
        'no_rek',
        'rating',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookingTeknisis(): HasMany
    {
        return $this->hasMany(BookingTeknisi::class);
    }
}