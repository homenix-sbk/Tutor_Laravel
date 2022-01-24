<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefecturesTable extends Migration
{
    public function up()
    {
        Schema::create('prefectures', function (Blueprint $table) {
            $table->increments('id')->comment('都道府県ID');
            $table->string('name')->comment('都道府県名');;
            $table->unsignedBigInteger('district_id')->unsigned()->comment('地方ID');
            $table->foreign('district_id')->references('id')->on('districts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prefectures');
    }
}
