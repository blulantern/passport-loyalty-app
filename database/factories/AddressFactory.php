<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'line_1' => $this->faker->address(),
            'city' => $this->faker->randomElement(['Springfield', 'New City', 'Gotham City', 'Metropolis']),
            'state' => $this->faker->randomElement(['NY', 'NJ', 'Il', 'TX', 'CA']),
            'zip_code' => $this->faker->randomElement(['10977', '10954', '89148', '75248']),
            'country' =>$this->faker->randomElement(['US', 'CA', 'MX'])
        ];
    }
}
