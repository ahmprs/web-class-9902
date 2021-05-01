<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tbl_books;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(tbl_books::class, function (Faker $faker) {
    return [
        'book_id' => null,
        'book_title' => Str::random(10),
        'book_author' => Str::random(10),
        'book_isbn' => Str::random(10),
        'book_info' => Str::random(10),
        'book_qty' => rand(0,10)
    ];
});
