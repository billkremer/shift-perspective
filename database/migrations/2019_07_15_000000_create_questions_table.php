<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quizid')->references('id')->on('quiz');
            $table->text('question');
            $table->string('dimension');
            $table->tinyInteger('direction');
            $table->string('meaning');
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
        Schema::dropIfExists('questions');
    }
}


// $questions = [  // Question,Dimension,Direction,Meaning
// ['You find it takes effort to introduce yourself to other people.','EI',1,'I'],
// ['You consider yourself more practical than creative.','SN',-1,'S'],
// ['Winning a debate matters less to you than making sure no one gets upset.','TF',1,F],
// ['You get energized going to social events that involve many interactions.','EI',-1,'E'],
// ['You often spend time exploring unrealistic and impractical yet intriguing ideas.','SN',1,'N'],
// ['Deadlines seem to you to be of relative rather than absolute importance.','JP',1,'P'],
// ['Logic is usually more important than heart when it comes to making important decisions.','TF',-1,'T'],
// ['Your home and work environments are quite tidy.','JP',-1,'J'],
// ['You do not mind being at the center of attention.','EI',-1,'E'],
// ['Keeping your options open is more important than having a to-do list.','JP',1,'P']
// ];
