<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;


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

    protected $model = User::class;
    public function definition(): array
    {
               return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'username' => fake()->userName,
            'phone' => fake()->phoneNumber,
            'question1' => fake()->randomElement([1,2,3,4,5,6]),
            'question2' => fake()->randomElement([1,2,3,4,5,6]),
            'question3' => fake()->randomElement([1,2,3,4,5,6]),
            'answer1' => Str::random(10),
            'answer2' => Str::random(10),
            'answer3' => fake()->colorName,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'llavemaestra' => fake()->password(7,20),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
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
