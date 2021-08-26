<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_xe', function (Blueprint $table) {
            $table->string('car_license_plate')->primary();
            $table->integer('car_brand');
            $table->integer('car_cus_id');
            $table->dateTime('car_date_receipt');
            $table->integer('car_status');
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
        Schema::dropIfExists('gara_xe');
    }
}
