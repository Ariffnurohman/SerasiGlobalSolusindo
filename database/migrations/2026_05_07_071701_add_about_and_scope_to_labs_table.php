<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('labs', function (Blueprint $table) {

            $table->longText('about')->nullable();
            $table->longText('scope_of_calibration')->nullable();

        });
    }

    public function down(): void
    {
        Schema::table('labs', function (Blueprint $table) {

            $table->dropColumn([
                'about',
                'scope_of_calibration'
            ]);

        });
    }
};