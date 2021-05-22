<?php

use App\tbl_requsts;
use Illuminate\Database\Seeder;

class TblRequstsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tbl_requsts::class, 20)->create();
    }
}
