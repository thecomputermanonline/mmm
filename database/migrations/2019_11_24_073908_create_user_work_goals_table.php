<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_work_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('gotjob');
            $table->string('company');
            $table->string('jobtitle');
            $table->string('professional_certifications');
            $table->string('skill_sets');

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
        Schema::dropIfExists('user_work_goals');
    }
}
