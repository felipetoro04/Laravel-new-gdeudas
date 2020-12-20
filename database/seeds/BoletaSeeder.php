<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BoletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $boletas = [];
                        
        foreach(range(1,20) as $index){
            $boletas[]= [
                'idInstitucion'=>rand(1,3),               
                'numeroBoleta'=>rand(1,10000),
                'fechaEmision'=> now(),
                'fechaVencimiento'=>now(),
                'montoPagar'=> $faker->randomDigitNot(0) * 100, 
                'idEstado'=> rand(6,7),
                'idUsuario'=>rand(1,20),
                'created_at' => now(),
                'updated_at' => now()
                      
            ];
        }
        
        DB::table('boletas')->insert($boletas);
    }
}