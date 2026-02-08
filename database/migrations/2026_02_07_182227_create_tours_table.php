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
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->enum('availability_status', ['open', 'full', 'cancelled'])->default('open'); // controlled roles
            // Destination
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->foreign('destination_id')
                ->references('id')
                ->on('destinations')
                ->onDelete('cascade');
            $table->integer('duation_days')->nullable();
            $table->decimal('price', 12, 2);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('max_participants')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
