<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemyoneticisis', function (Blueprint $table) {
            $table->id('yoneticiID');
            $table->string('ad');
            $table->string('soyad');
            $table->string('unvan');
            $table->string('ePosta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemyoneticisis');
    }
};
