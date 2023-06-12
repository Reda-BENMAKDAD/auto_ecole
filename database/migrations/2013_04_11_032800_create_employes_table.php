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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string("num_cin");
            $table->string("nom");
            $table->string("prenom");
            $table->date("date_naiss");
            $table->text("lieu_naiss");
            $table->text("adresse");
            $table->string("nationalite");
            $table->string("num_tel");
            $table->string("email")->nullable();
            $table->string("sexe");
            $table->float("salaire");
            $table->string("poste");
            $table->string("scan_cv")->nullable();
            $table->string("scan_cin")->nullable();
            $table->string("photo")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
