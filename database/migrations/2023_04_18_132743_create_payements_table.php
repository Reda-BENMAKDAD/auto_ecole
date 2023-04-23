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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->float("montant");
            $table->foreignId("idDossier");
            $table->foreign("idDossier")->references("id")->on("dossiers")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("idEmploye");
            $table->foreign("idEmploye")->references("id")->on("employes")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payements');
    }
};
