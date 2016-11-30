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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'mobile' => $faker->phoneNumber,
        'avatar' => $faker->imageUrl(100, 100),
        'password' => bcrypt(str_random(10)),
        'created_at' => $faker->dateTime,
    ];
});

$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(mt_rand(5, 10)),
        'body' => join("\n\n", $faker->paragraphs(mt_rand(7, 20))),
        'category_id' => mt_rand(1, 10),
        'user_id' => mt_rand(1, 30),
        'created_at' => $faker->dateTime,
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(7),
        'slug' => $faker->slug(),
        'created_at' => $faker->dateTime,
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
    	'topic_id' => mt_rand(90, 139),
        'user_id' => mt_rand(1, 30),
        'body' => $faker->sentence(mt_rand(10, 20)),
        'created_at' => $faker->dateTime,
    ];
});
