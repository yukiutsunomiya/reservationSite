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
            $table->string('adult');
            $table->string('child')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('seat');
            $table->string('opinion')->nullable();
            $table->string('surName');
            $table->string('name');
            $table->string('hiraganaSurName');
            $table->string('hiraganaName');
            $table->string('mobilePhone');
            $table->string('email');
            $table->string('store_id');
            $table->timestamps();
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
