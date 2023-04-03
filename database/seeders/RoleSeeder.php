<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            ["nom"=>"Administrateur"],
            ["nom"=>"Superviseur"],
            ["nom"=>"Notaire"]
        ]);
    }
}
