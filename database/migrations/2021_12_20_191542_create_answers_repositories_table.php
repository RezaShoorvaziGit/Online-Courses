<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_repositories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('text') ;
            $table->boolean('status')->default(false) ;
            $table->foreignId('question_repository_id');
            $table->foreign('question_repository_id')->references('id')->on('question_repositories') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers_repositories');
    }
}
