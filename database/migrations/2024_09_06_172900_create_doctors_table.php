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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->string('slug');
            $table->string('degrees');
            $table->string('designation');
            $table->string('time_to_patient');
            $table->integer('room_number');
            $table->string('img');
            $table->bigInteger('contact_number');
            $table->integer('doctor_fee');
            $table->bigInteger('deparment_id');
            $table->string('deparment_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
