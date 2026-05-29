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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->cascadeOnDelete();
            $table->string('invoice_number')->unique();
            $table->decimal('amount', 12, 2);
            $table->enum('payment_method', [
                'transfer_bank',
                'kartu_kredit',
                'e_wallet',
                'tunai',
                'cicilan'
            ])->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->enum('status', [
                'unpaid',
                'pending',
                'verified',
                'rejected'
            ])->default('unpaid');
            $table->text('catatan')->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users');
            $table->timestamps();
            
            $table->index('booking_id');
            $table->index('invoice_number');
            $table->index('status');
            $table->index('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};