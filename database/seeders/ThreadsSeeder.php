<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('threads')->insert([[
            'theme' => Str::random(10),
            'sum' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'theme' => Str::random(10),
            'sum' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'theme' => Str::random(10),
            'sum' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
