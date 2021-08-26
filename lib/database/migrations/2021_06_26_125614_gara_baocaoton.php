<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraBaocaoton extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_baocaoton', function (Blueprint $table) {
            $table->increments('inven_id');
            $table->integer('inven_spare_id');
            $table->string('inven_spare_name');
            $table->integer('inven_first');
            $table->integer('inven_last');
            $table->integer('inven_extra');
            $table->date('inven_date');
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
        Schema::dropIfExists('gara_baocaoton');
    }
}
