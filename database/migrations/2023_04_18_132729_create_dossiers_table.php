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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("idClient");
            $table->foreign("idClient")->references("id")->on("clients")->onDelete("cascade")->onUpdate("cascade");
            $table->boolean("contrat_legalise");
            $table->date("date_legalisation_contract");
            $table->boolean("dossier_saisi");
            $table->date("date_saisi_dossier");
            $table->boolean("visite_medicale");
            $table->date("date_visite_medicale");
            $table->boolean("rdv_theorique");
            $table->date("date_rdv_theorique");
            $table->boolean("rdv_pratique");
            $table->date("date_rdv_pratique");
            $table->boolean("permis_accorde");
            $table->string("centre_imm");
            $table->string("type_permis");
            $table->float("prix_permis");
            $table->float("avance");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
