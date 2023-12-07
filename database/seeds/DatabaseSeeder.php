<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 10)->create();
        factory(App\Task::class, 100)->create();
        factory(App\View::class, 100)->create();
        factory(App\Earning::class, 300)->create();
        factory(App\Lead::class, 100)->create();
        factory(App\Deposit::class, 100)->create();
        factory(App\Referral::class, 50)->create();
        factory(App\Post::class, 50)->create();
    }
}
