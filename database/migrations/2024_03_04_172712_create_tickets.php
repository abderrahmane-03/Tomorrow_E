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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId("reservation_id")->constrained('reservations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('picture');
            $table->text('description');
            $table->string('barCode');
            $table->string('place');
            $table->dateTime('Date');
            $table->string('location');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
