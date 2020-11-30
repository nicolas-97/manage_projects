<?php

namespace Database\Seeders;

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
        \App\Models\Company::factory(1)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Project::factory(1)->create();
        \App\Models\Backlog::factory(1)->create();
        \App\Models\Sprint::factory(1)->create();
    }
}
