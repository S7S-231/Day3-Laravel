<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(60)->create();
        \App\Models\post::factory(60)->create();

        \App\Models\User::factory()->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        ]);
        \App\Models\post::factory()->create([
            'title' => 'Title',
            'body' => 'Big Paragraph',
            'enabled' => 'True',
        ]);
    }
}
