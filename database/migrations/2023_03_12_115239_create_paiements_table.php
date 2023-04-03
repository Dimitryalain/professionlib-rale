<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double('montant');
            $table->dateTime('date_paiement');
            $table->foreignId('notaire_id')->constrained();
            $table->foreignId('abonnement_id')->constrained();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('paiements',function(Blueprint $table){
            $table->dropForeign('notaire_id');
            $table->dropForeign('abonnement_id');
        });

        Schema::dropIfExists('paiements');
    }
}
