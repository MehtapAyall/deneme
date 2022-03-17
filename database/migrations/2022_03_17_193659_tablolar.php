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
            $table->varchar('ad');
            $table->varchar('soyad');
            $table->varchar('ogrNo');
            $table->varchar('fakulte');
            $table->varchar('bolum');
            $table->varchar('sınıf');
            $table->varchar('telefon');
            $table->varchar('ePosta');
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
