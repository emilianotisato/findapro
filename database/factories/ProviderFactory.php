<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_category_id' => null,
            'name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'contact_phone' => $this->faker->phoneNumber,
            'contact_email' => $this->faker->email,
        ];
    }
}
