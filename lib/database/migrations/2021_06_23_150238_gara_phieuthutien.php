<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraPhieuthutien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_phieuthutien', function (Blueprint $table) {
            $table->increments("bill_id");
            $table->integer('bill_cus_id');
            $table->integer('bill_money_receive');
            $table->integer('bill_money_profit');
            $table->date('bill_date');
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
        Schema::dropIfExists('gara_phieuthutien');
    }
}
