<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'category' => 'Men'
        ]);
        $category->save();
        $category = new \App\Category([
            'category' => 'Women'
        ]);
        $category->save();
        $category = new \App\Category([
            'category' => 'Kids'
        ]);
        $category->save();
    }
}
