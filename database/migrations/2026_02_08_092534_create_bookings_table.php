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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')  
                ->onDelete('delete'); 
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')  
                ->onDelete('delete');               
            $table->datetime('booking_date')->useCurrent();
            $table->integer('participants')->nullable();
            $table->decimal('total_price', 12, 2);
            $table->enum('payment_status', ['pending', 'paid','cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
