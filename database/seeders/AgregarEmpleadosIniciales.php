<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpleadosIniciales extends Seeder
{
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i=0 ; $i < 100 ; $i++ ) { 
            DB::table('empleados')->insert([
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'nombre'=> $faker->name(),
                'lugar_nacimiento' => $faker -> city(),
                'fecha_nacimiento' => $faker -> dateTimeThisCentury(),
                'telefono' => $faker -> numberBetween (9999900000,99999999999),
                'cargo' => $faker ->jobTitle(),
                'estado' => $faker -> randomElement(['contratado','suspendido','prueba']),
                'codigo' => $faker -> numberBetween (99999,999999999),
                'empresa_id' => $faker -> numberBetween (1,20)
            ]);
        }
    }
}
