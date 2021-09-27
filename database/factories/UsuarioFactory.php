<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * El nombre correspondiente del modelo relaciona al factory.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'primer_nombre'=>$this->faker->firstName(),
            'segundo_nombre'=>$this->faker->firstName(),
            'primer_apellido'=>$this->faker->lastName(),
            'segundo_apellido'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->email(),
            'password'=>$this->faker->password(),
        ];
    }
}
