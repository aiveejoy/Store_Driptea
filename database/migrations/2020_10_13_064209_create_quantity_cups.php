<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantityCups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantity_cups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incomingLowDose')->nullable();
            $table->integer('incomingHighDose')->nullable();
            $table->integer('incomingOverDose')->nullable();
            $table->integer('onRockLowDose')->nullable();
            $table->integer('onRockHighDose')->nullable();
            $table->integer('onRockOverDose')->nullable();
            $table->integer('remainingLowDose')->nullable();
            $table->integer('remainingHighDose')->nullable();
            $table->integer('remainingOverDose')->nullable();
            $table->integer('usedCupsLowDose')->nullable();
            $table->integer('usedCupsHighDose')->nullable();
            $table->integer('usedCupsOverDose')->nullable();
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
        Schema::dropIfExists('quantity_cups');
    }
}
