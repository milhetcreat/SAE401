<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_UTILISATEUR' => '5',
            'ID_DESTINATAIRE' => '3',
            'ID_ANIMAL' => '2',
            'ID_CONVERSATION' => '0',
            'CONTENU' => fake()->paragraph(),
            'DATE' => now(),
        ];
    }
}
