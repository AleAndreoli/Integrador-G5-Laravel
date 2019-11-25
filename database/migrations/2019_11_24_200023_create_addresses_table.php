<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street');
            $table->integer('number');
            $table->integer('floor');
            $table->string('apartment');
            $table->integer('unit_tower')->nullable();
            $table->string('neighborhood');
            $table->string('province');
            $table->string('city');
            $table->integer('zip_code');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->unsignedbigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
