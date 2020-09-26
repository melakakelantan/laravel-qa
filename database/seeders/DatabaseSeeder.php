<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(3)->create()->each(function($u) {
            $u->questions()
              ->saveMany(
                  \App\Models\Question::factory()->count(rand(1, 5))->make()
              );
        });
        // User::factory(10)->create();
    }
}
