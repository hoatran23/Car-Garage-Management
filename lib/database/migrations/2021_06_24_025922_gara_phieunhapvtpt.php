<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaraPhieunhapvtpt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gara_phieunhapvtpt', function (Blueprint $table) {
            $table->increments("import_id");
            $table->integer('import_spare_id');
            $table->integer('import_quantity');
            $table->date('import_date');
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
        Schema::dropIfExists('gara_phieunhapvtpt');
    }
}
