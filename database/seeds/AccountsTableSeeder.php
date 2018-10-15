<?php

use Faker\Factory as Faker; // require Factory
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //raw insert
//        $account = \App\Account::create([
//            'fname' => 'Nhat Thanh',
//            'lname' => 'Strong',
//            'email' => 'thanh_nhat@deptrai.com'
//        ]);

        //using faker
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++) {
            $account = \App\Account::create([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email
            ]);
        }

    }
}
