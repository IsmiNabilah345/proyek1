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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')
                  ->nullable()
                  ->constrained('customers')
                  ->onDelete('set null');
            $table->foreignId('pickup_id')
                  ->constrained('pickups')
                  ->onDelete('cascade');
            $table->foreignId('dropoff_id')
                  ->constrained('dropoffs')
                  ->onDelete('cascade');
            $table->foreignId('tariff_id')
                  ->constrained('tariffs')
                  ->onDelete('restrict');
            $table->enum('status', ['pending','in_transit','delivered','cancelled'])
                  ->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
