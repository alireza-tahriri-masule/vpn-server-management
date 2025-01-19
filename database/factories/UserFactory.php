<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(), // Generate a UUID for the user
            'n' => $this->faker->name(), // Generate a fake name
            'e' => $this->faker->unique()->safeEmail(), // Generate a unique email
            'p' => Str::random(10), // Generate a random password (10 characters)
            'ph' => $this->faker->unique()->phoneNumber(), // Generate a unique phone number
            'r' => $this->faker->randomElement(['u', 'a']), // Random role (user or admin)
            't_e' => $this->faker->boolean(80) ? Carbon::now()->addDays($this->faker->numberBetween(1, 30)) : null, // Trial end date
            's_s' => $this->faker->dateTimeThisYear(), // Subscription start date within this year
            's_e' => $this->faker->dateTimeBetween('now', '+1 year'), // Subscription end date within 1 year
            'pl' => $this->faker->randomElement(['w', 'm', 'y']), // Random subscription plan
            'remember_token' => Str::random(10), // Generate a remember token
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
