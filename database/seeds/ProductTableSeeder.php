<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'product_name' => 'Golf Shoe',
            'description'=>'',
            'image_path' => 'product_01.jpeg',
            'price'=> 15000,
            'brand_id' => 1,
            'discount_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'sub_sub_category_id' => 1,
            'slug' => 'golf-shoe'
        ]);
        $product->save();
        $product = new \App\Product([
            'product_name' => 'Calvin Klein Jacket',
            'description'=>'',
            'image_path' => 'product_02.jpeg',
            'price'=> 5000,
            'brand_id' => 1,
            'discount_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 2,
            'sub_sub_category_id' => 7,
            'slug' => 'calvin-klein-jacket'
        ]);
        $product->save();
        $product = new \App\Product([
            'product_name' => 'Katlin Winter Gown',
            'description'=>'',
            'image_path' => 'product_03.jpeg',
            'price'=> 2500,
            'brand_id' => 2,
            'discount_id' => 2,
            'category_id' => 2,
            'sub_category_id' => 7,
            'sub_sub_category_id' => 22,
            'slug' => 'katlin-winter-gown'
        ]);
        $product->save();
        $product = new \App\Product([
            'product_name' => 'Bata Fishing Shoe',
            'description'=>'',
            'image_path' => 'product_04.jpeg',
            'price'=> 4300,
            'brand_id' => 3,
            'discount_id' => 1,
            'category_id' => 1,
            'sub_category_id' => 1,
            'sub_sub_category_id' => 1,
            'slug' => 'bata-fishing-shoes'
        ]);
        $product->save();
        $product = new \App\Product([
            'product_name' => 'Addidas Suit',
            'description'=>'',
            'image_path' => 'product_05.jpeg',
            'price'=> 9350,
            'discount_id' => 5,
            'brand_id' => 4,
            'category_id' => 2,
            'sub_category_id' => 2,
            'sub_sub_category_id' => 7,
            'slug' => 'addidas-suit'
        ]);
        $product->save();
        $product = new \App\Product([
            'product_name' => 'Buhari Collection',
            'description'=>'',
            'image_path' => 'product_06.jpeg',
            'price'=> 10480,
            'brand_id' => 1,
            'discount_id' => 4,
            'category_id' => 1,
            'sub_category_id' => 9,
            'slug' => 'buhari-collection'
        ]);
        $product->save();
        
    
    $product = new \App\Product([
        'product_name' => 'Simbi Leather Gown',
        'description'=>'',
        'image_path' => 'product_07.jpeg',
        'price'=> 8000,
        'brand_id' => 7,
        'discount_id' => 5,
        'category_id' => 2,
        'sub_category_id' => 7,
        'sub_sub_category_id' => 22,
        'slug' => 'simbi-leather-gown'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Koko Shoe',
        'description'=>'',
        'image_path' => 'product_08.jpeg',
        'price'=> 15000,
        'brand_id' => 1,
        'discount_id' => 3,
        'category_id' => 1,
        'sub_category_id' => 1,
        'sub_sub_category_id' => 1,
        'slug' => 'koko-shoe'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Osen Mustard Shoulder Bag',
        'description'=>'',
        'image_path' => 'product_09.jpeg',
        'price'=> 3500,
        'brand_id' => 1,
        'discount_id' => 2,
        'category_id' => 2,
        'sub_category_id' => 8,
        'sub_sub_category_id' => 27,
        'slug' => 'osen-mustard-shoulder-bag'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Bata Half Shoe',
        'description'=>'',
        'image_path' => 'product_10.jpeg',
        'price'=> 9200,
        'discount_id' => 2,
        'brand_id' => 3,
        'category_id' => 1,
        'sub_category_id' => 1,
        'sub_sub_category_id' => 2,
        'slug' => 'bata-half-shoe'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Biliki Bracelet',
        'description'=>'',
        'image_path' => 'product_11.jpeg',
        'price'=> 480,
        'brand_id' => 7,
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' => 8,
        'sub_sub_category_id' => 26,
        'slug' => 'biliki-bracelet'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Amber Flip Hat',
        'description'=>'',
        'image_path' => 'product_12.jpeg',
        'price'=> 2500,
        'brand_id' => 11,
        'discount_id' => 3,
        'category_id' => 2,
        'sub_category_id' => 8,
        'sub_sub_category_id' => 26,
        'slug' => 'amber-flip-hat'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Etiquette Underwear',
        'description'=>'',
        'image_path' => 'product_13.jpeg',
        'price'=> 300,
        'brand_id' => 8,
        'discount_id' => 4,
        'category_id' => 1,
        'sub_category_id' => 2,
        'sub_sub_category_id' => 9,
        'slug' => 'etiquette-underwear'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Cosby Hamattan Jacket',
        'description'=>'',
        'image_path' => 'product_14.jpeg',
        'price'=> 4200,
        'brand_id' => 6,
        'discount_id' => 2,
        'category_id' => 1,
        'sub_category_id' => 2,
        'sub_sub_category_id' => 7,
        'slug' => 'cosby-hamattan-jacket'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Gringo Jeans',
        'description'=>'',
        'image_path' => 'product_15.jpeg',
        'price'=> 6300,
        'brand_id' => 5,
        'discount_id' => 3,
        'category_id' => 1,
        'sub_category_id' => 2,
        'sub_sub_category_id' => 9,
        'slug' => 'gringo-jeans'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Simple T-Shirt',
        'description'=>'',
        'image_path' => 'product_16.jpeg',
        'price'=> 3200,
        'brand_id' => 7,
        'discount_id' => 4,
        'category_id' => 1,
        'sub_category_id' => 2,
        'sub_sub_category_id' => 7,
        'slug' => 'simple-tshirt'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Mofad Suede Shoe',
        'description'=>'',
        'image_path' => 'product_17.jpeg',
        'price'=> 5000,
        'brand_id' => 5,
        'discount_id' => 4,
        'category_id' => 1,
        'sub_category_id' => 1,
        'sub_sub_category_id' => 1,
        'slug' => 'mofad-suede-shoe'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Loose Shoe',
        'description'=>'',
        'image_path' => 'product_18.jpeg',
        'price'=> 18920,
        'brand_id' => 1,
        'discount_id' => 1,
        'category_id' => 1,
        'sub_category_id' => 1,
        'sub_sub_category_id' => 1,
        'slug' => 'loose-shoe'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Limen Scarf',
        'description'=>'',
        'image_path' => 'product_19.jpeg',
        'price'=> 1300,
        'brand_id' => 7,
        'discount_id' => 4,
        'category_id' => 2,
        'sub_category_id' => 8,
        'sub_sub_category_id' => 26,
        'slug' => 'limen-scarf'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Beaded Earings',
        'description'=>'',
        'image_path' => 'product_20.jpeg',
        'price'=> 200,
        'brand_id' => 7,
        'discount_id' => 3,
        'category_id' => 2,
        'sub_category_id' => 8,
        'sub_sub_category_id' => 26,
        'slug' => 'beaded-earings'

    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Red Skin Dress',
        'description'=>'',
        'image_path' => 'product_21.jpeg',
        'price'=> 5200,
        'brand_id' => 11,
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' => 7,
        'sub_sub_category_id' => 22,
        'slug' => 'red-skin-dress'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Jan Socks',
        'description'=>'',
        'image_path' => 'product_22.jpeg',
        'price'=> 400,
        'brand_id' => 1,
        'discount_id' => 5,
        'category_id' => 1,
        'sub_category_id' => 3,
        'sub_sub_category_id' => 12,
        'slug' => 'jan-soaks'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Carmel Silk Dress',
        'description'=>'',
        'image_path' => 'product_23.jpeg',
        'price'=> 14400,
        'brand_id' => 13,
        'discount_id' => 5,
        'category_id' => 2,
        'sub_category_id' => 7,
        'sub_sub_category_id' => 22,
        'slug' => 'carmel-silk-dress'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Shula Pant',
        'description'=>'',
        'image_path' => 'product_24.jpeg',
        'price'=> 500,
        'brand_id' => 8,
        'discount_id' => 1,
        'category_id' => 1,
        'sub_category_id' => 2,
        'sub_sub_category_id' => 9,
        'slug' => 'shula-pant'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'X-Corporate Black & White Dress',
        'description'=>'',
        'image_path' => 'product_25.jpeg',
        'price'=> 15500,
        'brand_id' => 8,
        'discount_id' => 5,
        'category_id' => 2,
        'sub_category_id' =>7,
        'sub_sub_category_id' => 22,
        'slug' => 'x-corporate-black-white-dress'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Pink Puyon Socks',
        'description'=>'',
        'image_path' => 'product_26.jpeg',
        'price'=> 500,
        'brand_id' => 9,
        'discount_id' => 5,
        'category_id' => 1,
        'sub_category_id' =>3,
        'sub_sub_category_id' => 12,
        'slug' => 'pink-puyon-socks',
        'color_id' => 1,
        'product_code' => 'true1234'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Yellow Puyon Socks',
        'description'=>'',
        'image_path' => 'product_27.jpeg',
        'price'=> 500,
        'brand_id' => 9,
        'discount_id' => 4,
        'category_id' => 1,
        'sub_category_id' =>3,
        'sub_sub_category_id' => 12,
        'slug' => 'yellow-puyon-socks',
        'color_id' => 2,
        'product_code' => 'true1234'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Sniscpa Sneaker Black',
        'description'=>'',
        'image_path' => 'product_28.jpeg',
        'price'=> 2500,
        'brand_id' => 8,
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 21,
        'slug' => 'sniscpa-sneaker-black',
        'color_id' => 3,
        'product_code' => 'sniscpa0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Sniscpa Sneaker White',
        'description'=>'',
        'image_path' => 'product_29.jpeg',
        'price'=> 2500,
        'brand_id' => 8,
        'discount_id' => 4,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 21,
        'slug' => 'sniscpa-sneaker-white',
        'color_id' => 4,
        'product_code' => 'sniscpa0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Camous Heel',
        'description'=>'',
        'image_path' => 'product_30.jpeg',
        'price'=> 4500,
        'brand_id' => 13,
        'discount_id' => 2,
        'category_id' => 2,
        'sub_category_id' =>6,
        'slug' => 'camous-heel',
        'sub_sub_category_id' => 20,
        'color_id' => 6,
        'product_code' => 'camous0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Glover Heel Black',
        'description'=>'',
        'image_path' => 'product_31.jpeg',
        'price'=> 10000,
        'brand_id' => 12,
        'discount_id' => 2,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 20,
        'slug' => 'glover-heel-black',
        'color_id' => 3,
        'product_code' => 'glover0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Glover Heel Red',
        'description'=>'',
        'image_path' => 'product_32.jpeg',
        'price'=> 10000,
        'brand_id' => 12,
        'discount_id' => 2,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 20,
        'slug' => 'glover-heel-red',
        'color_id' => 7,
        'product_code' => 'glover0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Glover Heel Taupe',
        'description'=>'',
        'image_path' => 'product_33.jpeg',
        'price'=> 10000,
        'brand_id' => 12,
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 20,
        'slug' => 'glover-heel-taupe',
        'color_id' => 6,
        'product_code' => 'glover0001'
    ]);
    $product->save();
    $product = new \App\Product([
        'product_name' => 'Jydo Buckle Strap Heel',
        'description'=>'',
        'image_path' => 'product_34.jpeg',
        'price'=> 7500,
        'brand_id' => 9,
        'discount_id' => 5,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 2,
        'slug' => 'jydo-buckle-strap-heel',
        'color_id' => 8,
        'product_code' => 'jydo0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Succi Block Wedge Black',
        'description'=>'',
        'image_path' => 'product_35.jpeg',
        'price'=> 9500,
        'brand_id' => 11,
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 21,
        'slug' => 'succi-block-wedge-black',
        'color_id' => 3,
        'product_code' => 'succi0001'
    ]);
    $product->save();

    $product = new \App\Product([
        'product_name' => 'Succi Block Wedge Grey',
        'description'=>'',
        'image_path' => 'product_35.jpeg',
        'price'=> 9500,
        'brand_id' => 11,
        'description' => 'Elegant Comfortable Shoe that goes well with all forms of dressing.',
        'discount_id' => 1,
        'category_id' => 2,
        'sub_category_id' =>6,
        'sub_sub_category_id' => 21,
        'slug' => 'succi-block-wedge-grey',
        'color_id' => 9,
        'product_code' => 'succi0001'
    ]);
    $product->save();


}
}

