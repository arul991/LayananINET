<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingTeknisi extends Model
{
    protected $table = 'booking_teknisis';

    protected $fillable = [
        'booking_id',
        'teknisi_id',
        'status',
        'serial_ont',
        'serial_odp',
        'catatan_teknisi',
        'foto_pemasangan',
        'foto_odt',
        'foto_ont',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    protected $casts = [
        'tanggal_mulai' => 'datetime',
        'tanggal_selesai' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function teknisi(): BelongsTo
    {
        return $this->belongsTo(Teknisi::class);
    }
}