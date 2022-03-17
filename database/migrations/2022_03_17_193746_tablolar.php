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
        Schema::create('sisteYonetici', function (Blueprint $table) {
            $table->id('yoneticiID');
            $table->varchar('ad');
            $table->varchar('soyad');
            $table->varchar('unvan');
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
        Schema::dropIfExists('sisteYonetici');
    }
};
