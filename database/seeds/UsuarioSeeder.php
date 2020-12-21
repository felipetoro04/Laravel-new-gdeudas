  
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
                'numeroDoc'=> "NUM DOC $index",
                'nombre'=> $faker->name,
                'idTipoSex'=>rand(3,5),
                'edad'=> $faker->randomDigitNot(18-80), 
                'email'=> preg_replace('/@example\..*/', '@domain.com', $faker->unique()->safeEmail),
                'contrasenia' => "Contresenia $index",
                'idPerfil'=> rand(1,2),
                'created_at' => now(),
                'updated_at' => now()    
            ];
        }
        
        DB::table('usuarios')->insert($usuarios);
    }
}