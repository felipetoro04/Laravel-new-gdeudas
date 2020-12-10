  
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $usuarios = [];
                        
        foreach(range(1,20) as $index){
            $usuarios[]= [
                'idTipoDoc'=>rand(1,2),               
                'numeroDoc'=>rand(1,10000),
                'nombre'=> $faker->name,
                'idTipoSex'=>rand(3,5),
                'edad'=> $faker->randomDigitNot(18-80), 
                'email'=> preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
                'contrasenia' => "Contresenia $index",
                'idPerfil'=> rand(1,20),
                'fechaCreacion'=> now(),        
            ];
        }
        
        DB::table('usuario')->insert($usuarios);
    }
}