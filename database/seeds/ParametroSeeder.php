<?php

use Illuminate\Database\Seeder;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parametros = [];

        foreach(range(1,20) as $index){
            $parametros[]= [
                'tipo'=> "tipo $index",
                'codigo'=> "Codigo $index",
                'descripcion'=> "descripcion $index",
                'valor'=> "valor $index", 

            ];

        }
        DB::table('parametros') ->insert($parametros);
    }
}
