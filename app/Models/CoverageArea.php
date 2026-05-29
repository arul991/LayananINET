<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverageArea extends Model
{
    protected $table = 'coverage_areas';

    protected $fillable = [
        'nama_area',
        'kota',
        'kecamatan',
        'deskripsi',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}