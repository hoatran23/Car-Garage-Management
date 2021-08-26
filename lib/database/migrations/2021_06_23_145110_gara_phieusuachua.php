<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraPhieusuachua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_phieusuachua', function (Blueprint $table) {
            $table->increments("note_repair_id");
            $table->string('note_repair_license_plate');
            $table->integer('note_repair_cus_id');
            $table->integer('note_repair_wage');
            $table->integer('note_repair_accessary');
            $table->integer('note_repair_total');
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
        Schema::dropIfExists('gara_phieusuachua');
    }
}
