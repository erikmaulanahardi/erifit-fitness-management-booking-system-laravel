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
        Schema::create('package_facilities', function (Blueprint $table) {
            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade');
            $table->foreignId('facility_id')->constrained('gym_facilities')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['package_id', 'facility_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_facilities');
    }
};
