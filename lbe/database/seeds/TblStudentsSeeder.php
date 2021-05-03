<?php

use App\tbl_students;
use Illuminate\Database\Seeder;

class TblStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tbl_students::class, 400)->create();
    }
}
