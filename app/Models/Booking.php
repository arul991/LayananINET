<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    protected $fillable = [
        'customer_id',
        'paket_id',
        'tanggal_booking',
        'alamat_pasang',
        'latitude',
        'longitude',
        'maps_link',
        'catatan',
        'status',
        'tanggal_setuju',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    protected $casts = [
        'tanggal_booking' => 'datetime',
        'tanggal_setuju' => 'datetime',
        'tanggal_mulai' => 'datetime',
        'tanggal_selesai' => 'datetime',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function paket(): BelongsTo
    {
        return $this->belongsTo(PaketInternet::class, 'paket_id');
    }

    public function bookingTeknisis(): HasMany
    {
        return $this->hasMany(BookingTeknisi::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function complaints(): HasMany
    {
        return $this->hasMany(Complaint::class);
    }
}