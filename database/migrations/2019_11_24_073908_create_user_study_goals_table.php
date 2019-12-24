<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStudyGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_study_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('study');
            $table->string('subject');
            $table->string('destination');
            $table->string('when');
            $table->text('language');
            $table->text('undergraduate');
            $table->text('postgraduate');
            $table->timestamps();
//            $table->string('gotjob');
//            $table->string('interestedprofession');
//            $table->string('qualifiedforjob');
//            $table->string('whyrelocate');
//            $table->string('likeconsultation');
//            $table->string('eligibleforcountry');

            //type
            //goalsdependsontype

            //why
            //eligble?
            //consultation?

            //future plns/test
            //english test
            //undergraduatetest
            //postgraduate


            //background
            //highest education
            //mostrecentorcurrentinstition
            //current

            //workexperince
            //factorpreferece
            //finacial plan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_study_goals');
    }
}
