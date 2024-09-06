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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained()->onDelete('cascade');
            $table->foreignId('subdivision_id')->constrained()->onDelete('cascade');
            $table->string('photo_profile');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('wa_link', 255);
            $table->enum('status', ['Aktif', 'Non Aktif']); // Add status column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
