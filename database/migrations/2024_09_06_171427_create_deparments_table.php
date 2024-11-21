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
        Schema::create('deparments', function (Blueprint $table) {
            $table->id();
            $table->string('deparment_name');
            $table->string('slug');
            $table->string('shot_des');
            $table->string('long_des');
            $table->string('img');
            $table->integer('doctor_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deparments');
    }
};
