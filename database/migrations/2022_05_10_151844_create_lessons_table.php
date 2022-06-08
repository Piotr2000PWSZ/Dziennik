<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weekday');
            $table->integer('week_number')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('przedmiot_id')->nullable();
        });
    }
}
