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
        Schema::table('hcantecedentes', function (Blueprint $table) {
            $table->string('details_ult_menstruacion')->nullable()->after('ult_menstruacion'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hcantecedentes', function (Blueprint $table) {
            //
        });
    }
};
