<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_category = new \App\SubCategory([
            'sub_category' => 'shoes',
            'category_id' => 1,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'clothing',
            'category_id' => 1,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'accessories',
            'category_id' => 1,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'shoe care',
            'category_id' => 1,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'collections',
            'category_id' => 1,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'shoes',
            'category_id' => 2,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'clothing',
            'category_id' => 2,
        ]);
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'accessories',
            'category_id' => 2,
        ]);
        $sub_category->save();

       
        $sub_category->save();
        $sub_category = new \App\SubCategory([
            'sub_category' => 'collections',
            'category_id' => 2,
        ]);
        $sub_category->save();
        
    }
}
