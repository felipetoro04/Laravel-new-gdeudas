  
<?php

use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfiles = [];
                        
        foreach(range(1,20) as $index){
            $perfiles[]= [
                'tipo'=> "tipo $index",               
                'codigo'=> "Codigo $index",
                'descripcion'=> "descripcion $index",
                'valor'=> "valor $index", 
            
            ];
        }
        
        DB::table('perfil')->insert($perfiles);
    }
}