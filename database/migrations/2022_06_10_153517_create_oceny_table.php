<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcenyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oceny', function (Blueprint $table) {
            $table->unsignedInteger('uczen_id');
            $table->unsignedInteger('przedmiot_id');
            $table->string('ocena')->nullable();
            $table->foreign('uczen_id')->references('id')->on('users');
            $table->foreign('przedmiot_id')->references('id')->on('przedmioty');
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
        Schema::dropIfExists('oceny');
    }
}
