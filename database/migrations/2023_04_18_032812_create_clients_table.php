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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("num_cin");
            $table->string("nom");
            $table->string("prenom");
            $table->date("date_naiss");
            $table->text("lieu_naiss");
            $table->text("adresse");
            $table->string("nationalite");
            $table->string("num_tel");
            $table->string("email");
            $table->string("sexe");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
