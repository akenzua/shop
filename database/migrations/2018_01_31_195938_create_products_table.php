<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->text('overview')->nullable();
            $table->string('image_path');
            $table->integer('price');
            $table->string('product_code')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('discount_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('sub_sub_category_id')->nullable();
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
