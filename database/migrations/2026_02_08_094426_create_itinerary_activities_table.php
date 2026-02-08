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
        Schema::create('itinerary_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('itinerary_id')->nullable();
            $table->foreign('itinerary_id')
                ->references('id')
                ->on('itineraries')  
                ->onDelete('delete'); 
            $table->time('time')->nullable();
            $table->string('title')->nullable();
            $table->longText('description'); 
            $table->string('location')->nullable();
            $table->enum('type', ['tour', 'meal','transport','other'])->default('tour'); // controlled activities
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itinerary_activities');
    }
};
