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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('paket_id')->constrained('paket_internets');
            $table->dateTime('tanggal_booking');
            $table->string('alamat_pasang');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('maps_link')->nullable();
            $table->text('catatan')->nullable();
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'assigned',
                'on_progress',
                'selesai',
                'cancelled'
            ])->default('pending');
            $table->dateTime('tanggal_setuju')->nullable();
            $table->dateTime('tanggal_mulai')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->timestamps();
            
            $table->index('customer_id');
            $table->index('status');
            $table->index('tanggal_booking');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};