<?php

use Illuminate\Database\Seeder;

class ColorVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color_variant = new \App\ColorVariant([
            'color_id' => 1,
            'product_code' => 'true1234'
        ]);
        $color_variant->save();

        $color_variant = new \App\ColorVariant([
            'color_id' => 1,
            'product_code' => 'true1234'
        ]);
        $color_variant->save();
    }
}
