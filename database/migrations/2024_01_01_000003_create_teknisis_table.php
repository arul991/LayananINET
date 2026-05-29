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
        Schema::create('teknisis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnDelete();
            $table->string('teknisi_code')->unique();
            $table->string('alamat');
            $table->string('wilayah');
            $table->string('no_rek')->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->timestamps();
            
            $table->index('teknisi_code');
            $table->index('user_id');
            $table->index('wilayah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teknisis');
    }
};