<?php

use Illuminate\Database\Seeder;

class PerfilPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil_permisos = [];

        foreach(range(1,20) as $index){
            $perfil_permisos[]= [
                'idperfil'=>rand(1,2),
                'idpermisos'=>rand(1,12),                

            ];

        }
        DB::table('perfil_permisos') ->insert($perfil_permisos);
    }
}
