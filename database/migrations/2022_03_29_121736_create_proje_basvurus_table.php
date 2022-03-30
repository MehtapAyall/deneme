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
            $table->string('baslik')->nullable();
            $table->string('amac')->nullable();
            $table->string('meteryal')->nullable();
            $table->string('anahtar1')->nullable();
            $table->string('anahtar2')->nullable();
            $table->string('anahtar3')->nullable();
            $table->string('anahtar4')->nullable();
            $table->string('anahtar5')->nullable();
            $table->string('ogrno')->nullable();
            $table->string('danisman')->nullable();
            $table->string('durum')->comment('beklemede');;
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
