<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'picture' => 'picture',
            'gender' => fake()->randomElement(['Male', 'Female' , 'Marketing' , 'HR']),
            'dateofbirth' => fake()->dateTimeBetween($startDate= '-60 years', $endDate='-18 years'),
            'firstday' => fake()->dateTimeBetween($startDate= '-10 years', $endDate='-1 days'), 
            'contracttype' => fake()->randomElement(['Odredeno', 'Neodredeno']),
            'contractlength' => fake()-> randomDigitNotNull(),
            'department' => fake()->randomElement(['Developer', 'Designer' , 'Marketing' , 'HR']),
            'vacationdays'=> fake()->numberBetween($min=0, $max=30) ,
            'sickleave' =>fake()->numberBetween($min=0, $max=30) ,
            'freedays' =>fake()->numberBetween($min=0, $max=30),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => fake()->password($min=6, $max=15), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
