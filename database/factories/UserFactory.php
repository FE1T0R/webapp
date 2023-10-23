<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Core\Number;

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
            'name_u' => fake()->name(),
            'lastname_u' => fake()->lastName(),
            'email_u' => fake()->unique()->safeEmail(),
            'username_u' => fake()->userName,
            'phone_u' => fake()->phoneNumber,
            'answer1' => Str::random(10),
            'answer2' => Str::random(10),
            'answer3' => fake()->colorName,
            'master_key' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
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
