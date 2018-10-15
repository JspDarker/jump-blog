<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; // required faker

class DepartmentAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create account before
        $account = factory(\App\Account::class,100)->create();
        // create department after
        $deparment = factory(\App\Department::class, 10)->create();
    }

}
