<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_khachhang', function (Blueprint $table) {
            $table->increments('cus_id');
            $table->string('cus_name');
            $table->string('cus_phone');
            $table->string('cus_address');
            $table->integer('cus_debt');
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
        Schema::dropIfExists('gara_khachhang');
    }
}
