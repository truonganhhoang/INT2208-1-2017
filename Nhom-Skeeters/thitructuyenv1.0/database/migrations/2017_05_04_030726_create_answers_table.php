<?php

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
        Schema::create('uet_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('uet_questions')->onDelete('cascade');
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
        Schema::drop('uet_answers');
    }
}
