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
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')  
                ->onDelete('delete'); 
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->foreign('destination_id')
                ->references('id')
                ->on('destinations')  
                ->onDelete('delete');
            $table->enum('type', ['image', 'video'])->default('image'); // controlled types
            $table->string('url')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
