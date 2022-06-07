<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassesTable extends Migration
{
    public function up()
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('tutor')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('school_classes', function (Blueprint $table){
            $table->foreign('tutor')->references('id')->on('users');
        });
    }
}
