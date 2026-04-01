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
        Schema::create('lab_accreditations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_id')->constrained()->onDelete('cascade');
            $table->string('name'); // KAN, ISO/IEC 17025, dll
            $table->string('certificate_number');
            $table->string('issued_by');
            $table->date('issued_date');
            $table->date('expiry_date');
            $table->string('file')->nullable();
            $table->string('scope')->nullable(); // lingkup akreditasi
            $table->timestamps();
            
            $table->index(['lab_id', 'expiry_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_accreditations');
    }
};
