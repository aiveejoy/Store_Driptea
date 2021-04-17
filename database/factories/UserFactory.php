<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

// class UserFactory extends Factory
// {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    $factory->define(User::class, function (Faker $faker)
    {
        return [
            'account_type' => 'Admin',
            'name' => $this->faker->unique()->safeUsername,
            'password' => Hash::make('Aero@mel31'),
            'remember_token' => Str::random(10)
        ];
    });
// }
