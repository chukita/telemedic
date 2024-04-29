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
        Schema::create('HcAntecedentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('enf_ped')->nullable();;
            $table->string('details_enf_ped')->nullable();
            $table->boolean('enf_adu')->nullable();;
            $table->string('details_enf_adu')->nullable();
            $table->boolean('enf_ment')->nullable();;
            $table->string('details_enf_ment')->nullable();
            $table->boolean('alergias')->nullable();;
            $table->string('details_alergias')->nullable();
            $table->boolean('vacunas')->nullable();;
            $table->string('details_vacunas')->nullable();
            $table->boolean('operaciones')->nullable();;
            $table->string('details_operaciones')->nullable();
            $table->boolean('traumas')->nullable();;
            $table->string('details_traumas')->nullable();
            $table->boolean('hosp_prev')->nullable();;
            $table->string('details_hosp_prev')->nullable();
            $table->boolean('medicacion')->nullable();;
            $table->string('details_medicacion')->nullable();
            $table->boolean('dona_sandre')->nullable();;
            $table->string('details_dona_sandre')->nullable();
            $table->boolean('tabaquismo')->nullable();;
            $table->string('details_tabaquismo')->nullable();
            $table->boolean('alcoholismo')->nullable();;
            $table->string('details_alcoholismo')->nullable();
            $table->boolean('drogas')->nullable();;
            $table->string('details_drogas')->nullable();
            $table->boolean('act_fisica')->nullable();;
            $table->string('details_act_fisica')->nullable();
            $table->string('ult_menstruacion')->nullable();
            $table->boolean('embarazos')->nullable();;
            $table->string('details_embarazos')->nullable();
            $table->boolean('partos')->nullable();;
            $table->string('details_partos')->nullable();
            $table->boolean('abortos')->nullable();;
            $table->string('details_abortos')->nullable();
            $table->boolean('enf_padre')->nullable();;
            $table->boolean('vive_padre')->nullable();;
            $table->string('detail_edad_padre')->nullable();
            $table->string('edad_padre')->nullable();
            $table->string('causa_padre')->nullable();
            $table->boolean('enf_madre')->nullable();;
            $table->boolean('vive_madre')->nullable();;
            $table->string('detail_edad_madre')->nullable();
            $table->string('edad_madre')->nullable();
            $table->string('causa_madre')->nullable();
            $table->boolean('enf_hno1')->nullable();;
            $table->boolean('vive_hno1')->nullable();;
            $table->string('detail_edad_hno1')->nullable();
            $table->string('edad_hno1')->nullable();
            $table->string('causa_hno1')->nullable();
            $table->boolean('enf_hno2')->nullable();;
            $table->boolean('vive_hno2')->nullable();;
            $table->string('detail_edad_hno2')->nullable();
            $table->string('edad_hno2')->nullable();
            $table->string('causa_hno2')->nullable();
            $table->integer('userId');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HcAntecedentes');
    }
};
