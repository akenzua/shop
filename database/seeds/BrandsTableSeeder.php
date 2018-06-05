<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = new \App\Brand([
            'brand' => 'Osen'
            // 1
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Katlin'
            // 2
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Bata'
            // 3
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Addidas'
            // 4
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Mofad'
            // 5
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Cosby'
            // 6
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Simbi'
            // 7
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Ettiquette'
            // 8
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Puyol'
            // 9
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Jydo'
            // 10
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'brand' => 'Succi',
            'brand_description' => 'From heart of Italy come the Best of Milanian Desing for all range of ....'
            // 11
        ]);
        $brand->save();
        
    
    $brand = new \App\Brand([
        'brand' => 'Glover'
        // 12
    ]);
    $brand->save();

    $brand = new \App\Brand([
        'brand' => 'Camous'
        // 13
    ]);
    $brand->save();
    $brand = new \App\Brand([
        'brand' => 'Snicspa'
        // 8
    ]);
    $brand->save();
}
}