<?php

use Illuminate\Database\Seeder;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $instituciones = [];
                        
        foreach(range(1,20) as $index){
            $instituciones[]= [
                'razonSocial'=> "razonSocial $index",
                'idTipoDoc'=>rand(1,2),               
                'numeroDoc'=>rand(1,10000),
                
            ];
        }
        
        DB::table('institucion')->insert($instituciones);
    }
}