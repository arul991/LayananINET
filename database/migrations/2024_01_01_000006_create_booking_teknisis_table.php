<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_teknisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->cascadeOnDelete();
            $table->foreignId('teknisi_id')->constrained('teknisis')->cascadeOnDelete();
            $table->enum('status', [
                'assigned',
                'on_progress',
                'selesai',
                'batal'
            ])->default('assigned');
            $table->string('serial_ont')->nullable();
            $table->string('serial_odp')->nullable();
            $table->text('catatan_teknisi')->nullable();
            $table->string('foto_pemasangan')->nullable();
            $table->string('foto_odt')->nullable();
            $table->string('foto_ont')->nullable();
            $table->dateTime('tanggal_mulai')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->timestamps();
            
            $table->index('booking_id');
            $table->index('teknisi_id');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_teknisis');
    }
};