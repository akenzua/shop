<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = new \App\Color([
            'color' => 'pink',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'yellow',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'black',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'white',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'red',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'taupe',
            
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => '#722f37',
            // wine
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => '#a52a2a',
            // brown
        ]);
        $color->save();
        $color = new \App\Color([
            'color' => 'grey',
            
        ]);
        $color->save();
    }
}
