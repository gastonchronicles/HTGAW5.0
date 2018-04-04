<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'username' => $faker->word,
        'bdate' => '1995-04-03'
    ];
});



$factory->define(App\Rating::class, function (Faker\Generator $faker) {

    return [


        'subject_id' => $faker->randomNumber,
        'category_id' => $faker->randomNumber,
        'category' =>$faker->word,
        'percentage' =>$faker->randomNumber,


    ];
});


$factory->define(App\Subject::class, function (Faker\Generator $faker) {

    return [

        'user_id' => App\User::all()->random()->id,
        'subject_id' => App\Rating::all()->random()->id,
        'name' => $faker->word,
    ];
});


$factory->define(App\Grade::class, function (Faker\Generator $faker) {

    return [

        'user_id' => App\User::all()->random()->id,
        'subject_id' => App\Rating::all()->random()->id,
        'category' => $faker->word,
        'score' =>$faker->randomNumber,
        'total' =>$faker->randomNumber,

    ];
});


$factory->define(App\Standing::class, function (Faker\Generator $faker) {

    return [

        'user_id' => App\User::all()->random()->id,
        'subject_id' => App\Rating::all()->random()->id,
        'standing_id' => App\Standing::all()->random()->id,
        'subject_name' => $faker->word,
        'overall' => $faker->randomNumber,
        'status' => $faker->randomNumber,
    ];
});

$factory->define(App\Cat::class, function (Faker\Generator $faker) {

    return [


        'subject_id' => App\Rating::all()->random()->id,
        'cats_name' => $faker->word,
        'tScore' => $faker->randomNumber,
        'tTotal' => $faker->randomNumber,
    ];
});
