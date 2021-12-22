<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_repositories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('question_level',['آسان','متوسط','دشوار'])->default('آسان') ;
            $table->string('btn_level')->default('btn-success');
            $table->enum('type', ['descriptive', 'multiple_options']);
            $table->string('subject') ;
            $table->text('text') ;
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_repositories');
    }
}
