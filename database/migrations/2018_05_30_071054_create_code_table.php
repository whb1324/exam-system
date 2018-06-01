<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->longText('code');
            $table->integer('rank');
            $table->timestamp('created')->useCurrent();
            $table->timestamp('updated')->useCurrent();
            $table->smallInteger('del_flg')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('code');
    }
}
