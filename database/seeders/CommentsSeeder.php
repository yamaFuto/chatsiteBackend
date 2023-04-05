<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([[
            'comment' => Str::random(20),
            'goods' => 0,
            'date' => Carbon::parse(now()),
            'thread_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'comment' => Str::random(20),
            'goods' => 0,
            'date' => Carbon::parse(now()),
            'thread_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'comment' => Str::random(20),
            'goods' => 0,
            'date' => Carbon::parse(now()),
            'thread_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
