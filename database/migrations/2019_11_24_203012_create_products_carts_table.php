<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('shopping_cart_id');
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
            $table->unsignedbigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('amount');
            $table->double('price', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_carts');
    }
}
