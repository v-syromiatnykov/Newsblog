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
        factory(App\Models\User::class, 50)->create();
        factory(App\Models\Category::class, 6)->create();
        factory(App\Models\Post::class, 400)->create();
        factory(App\Models\Comment::class, 700)->create();
    }
}
