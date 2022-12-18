<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('privilegios')->truncate();
        Schema::enableForeignKeyConstraints();
        \App\Models\Privilegio::insert([
            ["id" => 1, "name" => 'Cadastro de Categorias',],
            ["id" => 2, "name" => 'Cadastro de Marcas',],
            ["id" => 3, "name" => 'Cadastro de Produtos',],
        ]);
    }
}
