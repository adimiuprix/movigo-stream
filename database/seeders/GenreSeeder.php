<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'g_name' => 'Action',
                'slug' => 'action',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'g_name' => 'Comedy',
                'slug' => 'comedy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'g_name' => 'Sci-Fi',
                'slug' => 'sci-Fi',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'g_name' => 'Horor',
                'slug' => 'horor',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'g_name' => 'Fantacy',
                'slug' => 'fantacy',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
