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
        Schema::create('ogrenci', function (Blueprint $table) {
            $table->id('ogrID');
            $table->string('Ad');
            $table->string('soyad');
            $table->string('ogrNo');
            $table->string('fakulte');
            $table->string('bolum');
            $table->string('sınıf');
            $table->string('telefon');
            $table->string('ePosta');
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
        Schema::dropIfExists('ogrenci');
    }
};
