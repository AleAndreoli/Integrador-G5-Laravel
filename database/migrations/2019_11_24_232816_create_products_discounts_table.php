<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedbigInteger('discount_id');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->timestamp('end_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_discounts');
    }
}
