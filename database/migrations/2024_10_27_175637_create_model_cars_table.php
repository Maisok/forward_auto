<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->year('year');
            $table->string('vin')->unique();
            $table->string('color');
            $table->integer('mileage');
            $table->decimal('price', 10, 2);
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};