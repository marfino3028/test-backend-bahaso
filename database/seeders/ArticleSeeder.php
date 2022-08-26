<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
            'title' => 'IT Terbaik',
            'description' => 'IT Terbaik di indonesia'
        ));

        Article::create(array(
            'title' => 'IT Terbaik 2',
            'description' => 'IT Terbaik di indonesia 2'
        ));
    }
}
