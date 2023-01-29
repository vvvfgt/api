<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Card;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Task;
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
        Desk::factory(7)
            ->has(
               DeskList::factory (3)
                   ->has(
                      Card::factory(3)
                          ->has(
                              Task::factory(3)
                          )
                   )
            )
            ->create();
    }
}
