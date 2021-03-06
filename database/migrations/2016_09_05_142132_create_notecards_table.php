<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotecardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notecards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('subject_id')->unsigned()->index();
            $table->string('title', 255);
            $table->string('question', 1000);
            $table->string('answer', 1000);
            $table->integer('views');
            $table->integer('answered_correct');
            $table->integer('difficulty');
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
        Schema::drop('notecards');
    }
}
