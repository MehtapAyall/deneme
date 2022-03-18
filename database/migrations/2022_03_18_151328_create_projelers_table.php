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
        Schema::create('projelers', function (Blueprint $table) {
            $table->id('projeNo');
            $table->string('projeTanım');
            $table->datetime('baslamaTarihi');
            $table->datetime('bitisTarihi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projelers');
    }
};
