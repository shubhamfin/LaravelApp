<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'cat 1',
            'slug' => 'cat-1',

        ]);
        Category::create([
            'title' => 'cat 2',
            'slug' => 'cat-2',

        ]);
        // Category::factory(2)->create();
    }
}
