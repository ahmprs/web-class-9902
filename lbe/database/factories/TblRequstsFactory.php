<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tbl_requsts;
use Faker\Generator as Faker;

use Illuminate\Support\Str;


$factory->define(tbl_requsts::class, function (Faker $faker) {
    return [
        "req_id" => null,
        "req_title" => Str::random(15),
        "priority" => rand(0, 10),
        "description" => Str::random(20),
    ];
});
