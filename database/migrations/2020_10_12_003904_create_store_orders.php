<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cashierId');
            $table->bigInteger('customerId');
            $table->bigInteger('storeCheckoutsId');
            $table->bigInteger('productId');
            $table->bigInteger('onlineId')->nullable();
            $table->string('customerType');
            $table->integer('quantity');
            $table->string('size');
            $table->string('cupType');
            $table->string('sugarLevel');
            $table->double('choosenPrice');
            $table->double('subTotal');
            $table->string('status');
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
        Schema::dropIfExists('store_orders');
    }
}
