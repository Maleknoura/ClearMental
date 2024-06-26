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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('time_slot'); 
            $table->date('appointment_date'); 
            $table->enum('statut', ['confirmée', 'en attente'])->default('en attente');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('coach_id');

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
