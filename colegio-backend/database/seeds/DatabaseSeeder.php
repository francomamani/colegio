<?php

use App\Gestion;
use App\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gestion = Gestion::create([
            'gestion' => 2018,
            'bimestre' => 'Primer bimestre',
        ]);
        $usuario = Usuario::create([
            'gestion_id' => $gestion->gestion_id,
            'cuenta' => 'franco',
            'password' => Hash::make('franco'),
            'nombres' => 'Franco Jesus',
            'apellidos' => 'Mamani Pozo',
            'cedula' => '7275047',
            'direccion' => 'Hugo Bohero #650',
            'celular' => '76137653',
            'tipo_usuario' => 'administrador',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
