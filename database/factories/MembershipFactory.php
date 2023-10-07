<?php

namespace Database\Factories;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Membership::class;
    public function definition(): array
    {
        return [
            'card_code' => $this->faker->uuid(),
            'level' => $this->faker->randomElement(['gold', 'silver', 'platinum', 'diamond']),
        ];
    }
}
