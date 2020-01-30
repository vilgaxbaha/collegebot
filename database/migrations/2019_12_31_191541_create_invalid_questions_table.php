<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvalidQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalid_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('q_id');
            $table->text('question');
            $table->text('ans');
            $table->date('date');
            $table->foreign('q_id')->references('id')->on('add_questions');
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
        Schema::dropIfExists('invalid_questions');
    }
}
