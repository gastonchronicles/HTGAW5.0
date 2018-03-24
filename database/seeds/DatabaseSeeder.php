<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        factory(App\Rating::class, 1500)->create();
        factory(App\Subject::class, 2000)->create();
        factory(App\Grade::class, 2500)->create();
        factory(App\Standing::class, 3000)->create();


    }
}
