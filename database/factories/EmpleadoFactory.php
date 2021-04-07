<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'nombre'=> $this->faker->name(),
            'lugar_nacimiento' => $this->faker -> city(),
            'fecha_nacimiento' => $this->faker -> dateTimeThisCentury(),
            'telefono' => $this->faker -> numberBetween (9999900000,99999999999),
            'cargo' => $this->faker ->jobTitle(),
            'estado' => $this->faker -> randomElement(['contratado','suspendido','prueba']),
            'codigo' => $this->faker -> numberBetween (99999,999999999),
            'empresa_id' => $this->faker->numberBetween(1,Empresa::count())
        ];
    }
}
