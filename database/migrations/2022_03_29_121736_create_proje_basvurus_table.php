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
        Schema::create('proje_basvurus', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->string('amac');
            $table->string('meteryal');
            $table->string('anahtar1');
            $table->string('anahtar2');
            $table->string('anahtar3');
            $table->string('anahtar4');
            $table->string('anahtar5');
            $table->string('ogrID');
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
        Schema::dropIfExists('proje_basvurus');
    }
};
