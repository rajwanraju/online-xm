<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->integer('exam_id')->autoIncrement();
            $table->string('instruction');
            $table->time('duration');
            $table->date('start_date_time');
            $table->date('end_date_time');
            $table->time('is_live');
            $table->integer('teacher_id')->unsigned()->index();
            $table->integer('course_id')->unsigned()->index();
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
        Schema::dropIfExists('exams');
    }
}
