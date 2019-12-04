<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFillupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fillups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id');
            $table->integer('odometer');
            $table->decimal('gallons', 15, 3);
            $table->decimal('price', 15, 3);
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
        Schema::dropIfExists('fillups');
    }
}
