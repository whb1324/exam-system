<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->char('answer_choice', 5);
            $table->longText('answer_content');
            $table->smallInteger('right_answer');
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
        Schema::dropIfExists('answers');
    }
}
