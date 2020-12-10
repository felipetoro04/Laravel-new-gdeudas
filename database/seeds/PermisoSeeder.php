<?php

use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [];            
            foreach(range(1,20) as $index){
                $permisos[]= [
                    'tipo'=> "tipo $index",               
                    'codigo'=> "Codigo $index",
                    'descripcion'=> "descripcion $index",
                    'valor'=> "valor $index", 
                
                ];
            }
            
            DB::table('permisos')->insert($permisos);
        }
    }