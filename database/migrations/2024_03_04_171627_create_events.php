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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("organisateur_id")->constrained('organisateurs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('description');
            $table->dateTime('date');
            $table->integer('places_available');
            $table->string('location');
            $table->string('picture');
            $table->string('accepted')->default("pending");
            $table->string('type_of_reservation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
