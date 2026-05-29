<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaketInternet extends Model
{
    protected $table = 'paket_internets';

    protected $fillable = [
        'nama_paket',
        'kecepatan',
        'harga',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'paket_id');
    }
}