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
        Schema::create('lab_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained('service_categories');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->json('parameters')->nullable(); // parameter yang dikalibrasi
            $table->string('range')->nullable();
            $table->string('accuracy')->nullable();
            $table->string('standard')->nullable();
            $table->string('turnaround_time')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->boolean('is_negotiable')->default(false);
            $table->json('certificates')->nullable(); // sertifikat yang dimiliki
            $table->integer('views')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['lab_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_services');
    }
};
