<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"Créer superviseur"],
            ["nom"=>"Desactiver superviseur"],


            ["nom"=>"Valider compte"],
            ["nom"=>"Activer notaire"],
            ["nom"=>"Desactiver notaire"],

            ["nom"=>"Consulter liste utilisateur"],
            ["nom"=>"Supprimer utilisateur"],

            ["nom"=>"Consulter RDV"],
            ["nom"=>"Supprimer RDV"],
            ["nom"=>"Modifier RDV"],
            ["nom"=>"Rejeté RDV"],
            ["nom"=>"Annuler RDV"],

            ["nom"=>"Consulter agenda"],
            ["nom"=>"Consulter TDB"]
            
        ]);
    }
}
