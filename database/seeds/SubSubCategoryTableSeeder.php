<?php

use Illuminate\Database\Seeder;

class SubSubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'formal',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'casual',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'loafers',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'sneakers',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'moccassins',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 1,
            'sub_sub_category' => 'slip-on',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 2,
            'sub_sub_category' => 'jacket',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 2,
            'sub_sub_category' => 'shorts',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 2,
            'sub_sub_category' => 'pants',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 3,
            'sub_sub_category' => 'wallets',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 3,
            'sub_sub_category' => 'bags',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 3,
            'sub_sub_category' => 'belts',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 4,
            'sub_sub_category' => 'horn',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 4,
            'sub_sub_category' => 'brush',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 4,
            'sub_sub_category' => 'tress',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 4,
            'sub_sub_category' => 'wax',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 4,
            'sub_sub_category' => 'case',
            'category_id' => 1
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 6,
            'sub_sub_category' => 'flat',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 6,
            'sub_sub_category' => 'sandal',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 6,
            'sub_sub_category' => 'formal',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 6,
            'sub_sub_category' => 'casuals',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 7,
            'sub_sub_category' => 'jacket',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 7,
            'sub_sub_category' => 'pants',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 7,
            'sub_sub_category' => 'shorts',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 8,
            'sub_sub_category' => 'wallet',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 8,
            'sub_sub_category' => 'belt',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
        $sub_sub_category = new \App\SubSubCategory([
            'sub_category_id' => 8,
            'sub_sub_category' => 'handbags',
            'category_id' => 2
        ]);
        $sub_sub_category->save();
    }
}
