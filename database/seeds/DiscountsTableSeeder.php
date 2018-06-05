<?php

use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = new \App\Discount([
            'discount' => .05
            
        ]);
        $discount->save();

        $discount = new \App\Discount([
            'discount' => .075
            
        ]);
        $discount->save();

        $discount = new \App\Discount([
            'discount' => .1
            
        ]);
        $discount->save();

        $discount = new \App\Discount([
            'discount' => .15
            
        ]);
        $discount->save();

        $discount = new \App\Discount([
            'discount' => .2
            
        ]);
        $discount->save();
        
        
    }
}
