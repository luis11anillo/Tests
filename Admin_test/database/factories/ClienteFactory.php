<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create the email with the client name
        $name = fake()->name();
        $nameParts = explode(' ', $name);
        $email = strtolower($nameParts[0] . '.' . $nameParts[1] . '@example.com');

        return [
            'CC' => fake()->randomNumber(8),
            'name' => $name,
            'birthday' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'city' => fake()->city(),
            'address' => fake()->streetAddress(),
            'email' => $email,
            'status' => fake()->randomElement(['Active', 'Inactive', 'Suspended']),
        ];
    }
}
