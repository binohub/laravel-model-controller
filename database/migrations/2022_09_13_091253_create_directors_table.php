<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * unsigned() vie utilizzato quando non necessito dei numeri negativi, facendo ciò i miei numeri negativi saranno convertiti e aggiunti a quelli positivi
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string("name", 25);
            $table->string("surname", 25);
            $table->smallInteger("age")->unsigned();

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
        Schema::dropIfExists('directors');
    }
}
