<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('answer') ;
            $table->integer('score')->nullable() ;
            $table->foreignId('user_id');
            $table->foreignId('exam_id');
            $table->foreignId('question_id')->primary();
            $table->foreign('question_id')->references('id')->on('questions') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answers');
    }
}
