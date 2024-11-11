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
        Schema::table('contact_informations', function (Blueprint $table) {
            $table->string('location')->nullable(); // Menyimpan alamat lokasi
            $table->decimal('latitude', 10, 7)->nullable(); // Menyimpan latitude untuk peta
            $table->decimal('longitude', 10, 7)->nullable(); // Menyimpan longitude untuk peta
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_informations', function (Blueprint $table) {
            //
        });
    }
};
