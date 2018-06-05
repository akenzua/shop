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
        $this->call(ProductTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(SubSubCategoryTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(SizeOptionsTableSeeder::class);
        $this->call(ColorVariantsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(DiscountsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
    }
}
