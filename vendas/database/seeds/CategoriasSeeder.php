<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
          'nome' => 'Roupas'
        ]);
        DB::table('categorias')->insert([
          'nome' => 'Eletronicos'
        ]);
        DB::table('categorias')->insert([
          'nome' => 'Perfumaria'
        ]);
        DB::table('categorias')->insert([
          'nome' => 'Móveis'
        ]);
    }
}
