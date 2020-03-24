<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$closure = function (Faker $faker){
    $title = $faker->sentence(rand(3, 10));
    $slug = Str::slug($title);
    $content = $faker->text(rand(1000, 5000));
    $small = substr($content, 0, 250) . '...';
    $img = $faker->imageUrl();

    return [
        'title' => $title,
        'small_text' => $small,
        'content' => $content,
        'slug' => $slug,
        'img' => $img,
        'user_id' => 1,
    ];
};

$factory->define(Post::class, $closure);
