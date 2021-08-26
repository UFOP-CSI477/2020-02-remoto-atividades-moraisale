<?php

namespace Database\Factories;

use App\Models\Vacina;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nomeVacina = ['CoronaVac', 'AstraZeneca', 'Pfizer', 'Janssen'];
        $nome = array_rand($nomeVacina);

        $fabricanteVacina = ['Butantan', 'Oxford', 'BioNTech', 'Jognson & Johnson'];
        $fabricante = array_rand($fabricanteVacina);

        return [
            'nome' => $nomeVacina[$nome],
            'fabricante' => $fabricanteVacina[$fabricante],
            'doses' => rand(0, 2),
        ];
    }
}
