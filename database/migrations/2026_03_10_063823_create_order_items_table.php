<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('lab_service_id')->constrained();
            $table->string('instrument_name');
            $table->string('instrument_brand')->nullable();
            $table->string('instrument_model')->nullable();
            $table->string('serial_number');
            $table->integer('quantity')->default(1);
            $table->string('range')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->text('special_requirements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
