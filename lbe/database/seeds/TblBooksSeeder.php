<?php

use Illuminate\Database\Seeder;
use App\tbl_books;


class TblBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tbl_books::class, 100)->create();
    }
}
