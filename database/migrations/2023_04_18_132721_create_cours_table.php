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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->foreignId("idClient");
            $table->foreign("idClient")->references("id")->on("clients")->onDelete("cascade")->onUpdate("cascade");
            $table->string("nature_cours");
            $table->date("date_cours");
            $table->foreignId("idMoniteur");
            $table->foreign("idMoniteur")->references("id")->on("employes")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("idVehicule");
            $table->foreign("idVehicule")->references("id")->on("vehicules")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        
        Schema::dropIfExists('cours');
    }
};
