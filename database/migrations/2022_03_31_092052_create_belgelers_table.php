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
        Schema::create('belgelers', function (Blueprint $table) {
            $table->id();
            $table->string('ogrno');
            $table->string('belge1')->nullable();
            $table->string('belge2')->nullable();
            $table->string('belge3')->nullable();
            $table->string('pdf1')->nullable();
            $table->string('pdf2')->nullable();
            $table->string('pdf3')->nullable();
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
        Schema::dropIfExists('belgelers');
    }
};
