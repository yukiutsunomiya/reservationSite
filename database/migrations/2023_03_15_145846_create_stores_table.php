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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('furigana')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('zipCode');
            $table->string('prefectures');
            $table->string('address');
            $table->string('businessDay');
            $table->string('businessHours');
            $table->string('store_url');
            $table->timestamps();
            //$table->primary('store_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
