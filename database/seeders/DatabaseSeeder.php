<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
use Database\Factories\TodosFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(UsersTableSeeder::class);

        // Todo::factory(10)->create();
        User::factory()->count(50)->create();
        Todo::factory()->count(50)->create();

        // $factory = new UserFactory();
        // $factory->count(10)->create();
    }
}
