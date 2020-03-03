<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'quality' => $faker->randomDigit,
		'category_id' => $faker->randomElement(Category::pluck('id')),
		'description' => $faker->text,
	];
});
