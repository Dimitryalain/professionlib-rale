<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires', function (Blueprint $table) {
            $table->id();
            $table->date('jour_semaine');
            $table->time('heure_travail');
            $table->integer('disponibilite');
            $table->foreignId('notaire_id')->constrained();;
            $table->timestamps();
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

        Schema::table('horaies',function(Blueprint $table){
            $table->dropForeign('notaire_id');
        });
        Schema::dropIfExists('horaires');
    }
}
