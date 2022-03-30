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
        Schema::create('ogrencikayit_bilgis', function (Blueprint $table) {
            $table->id();
            $table->string('ogrenciadi')->nullable();
            $table->string('ogrencino')->unique();
            $table->string('ogrencisoyad')->nullable();
            $table->string('ogrencitelefon')->nullable();
            $table->string('ogrencisifre')->nullable();
            $table->string('ogrenciemail')->nullable();
            $table->string('image')->nullable();
            $table->string('ogrencisinif')->nullable();
            $table->string('ogrencifakulte')->nullable();
            $table->string('ogrencibolum')->nullable();
            $table->string('danisman')->nullable();

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
        Schema::dropIfExists('ogrencikayit_bilgis');
    }
};
