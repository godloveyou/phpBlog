<?php
use Faker\Generator as Faker;
$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;
    return [
        'id'  =>  $faker->uuid('uuid'),
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456')
    ];
});
