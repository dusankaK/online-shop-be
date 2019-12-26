<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();

        App\User::create(
            ['first_name' => 'Dusanka',
             'last_name' => 'Karac', 
             'email' => 'duda@duda.com', 
             'password' => bcrypt('duda1025'),
            ]);
    }
}
