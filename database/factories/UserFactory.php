<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => Str::uuid(), // Generate a UUID for the user
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'), // Set a default password
            'phone_number' => $this->faker->phoneNumber(), // Generate a fake phone number
            'role' => $this->faker->randomElement(['user', 'admin', 'moderator']), // Random role
            'status' => $this->faker->boolean(90), // 90% chance of being active
            'trial_end' => $this->faker->boolean(80) ? Carbon::now()->addDays($this->faker->numberBetween(1, 30)) : null, // Trial days between 1 and 30
            'subscription_start' => $this->faker->dateTimeThisYear(), // Random start date this year
            'subscription_end' => $this->faker->dateTimeBetween('now', '+1 year'), // Random end date within 1 year
            'plan' => $this->faker->randomElement(['weekly', 'monthly', 'yearly']), // Random subscription plan
            'remember_token' => Str::random(10),
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
