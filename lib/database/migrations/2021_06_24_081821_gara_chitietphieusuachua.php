<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraChitietphieusuachua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_chitietphieusuachua', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('detail_note_repair_id');
            $table->integer('detail_wage_id');
            $table->integer('detail_store_id');
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
        Schema::dropIfExists('gara_chitietphieusuachua');
    }
}
