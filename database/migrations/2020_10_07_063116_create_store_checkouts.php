<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreCheckouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('customerId');
            $table->double('subTotal')->nullable();
            $table->integer('deliveryFee')->nullable();
            $table->double('total');
            $table->string('incash')->nullable();
            $table->string('change')->nullable();
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
        Schema::dropIfExists('store_checkouts');
    }
}
