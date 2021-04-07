<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AgregarEmpleadosIniciales;
use Database\Seeders\AgregarEmpresasIniciales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this -> call (AgregarEmpresasIniciales::class);
       $this -> call (AgregarEmpleadosIniciales::class);
       $this -> call (AgregarEmpresasAdicionales::class);
       $this -> call (AgregarEmpleadosAdicionales::class);
    }
}
