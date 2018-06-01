<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->char('answers', 10);
            $table->longText('answer_detail_content');
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
        Schema::dropIfExists('answer_detail');
    }
}
