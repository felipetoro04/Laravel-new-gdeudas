<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        ParametroSeeder::class,
        PerfilSeeder::class,
        PermisoSeeder::class,
        PerfilPermisoSeeder::class,
        UsuarioSeeder::class,
        InstitucionSeeder::class,
        BoletaSeeder::class,
        ]);
    }
}
