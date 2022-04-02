<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\News;
use App\Models\NewsProduct;
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
        // Category::factory(50)->create();
        // CategoryProduct::factory(10)->create();
        // News::factory(30)->create();
        NewsProduct::factory(50)->create();
    }
}
