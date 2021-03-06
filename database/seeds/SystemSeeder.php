<?php

use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = new \App\Models\Options();
        $options->title = 'localshot';
        $options->siteUrl = 'http://localhost:8000';
        $options->save();

        $category = new \App\Models\Category();
        $category->name = '分类目录';
        $category->slug = 'categories';
        $category->save();
    }
}
