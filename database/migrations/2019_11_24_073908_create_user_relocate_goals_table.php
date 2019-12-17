<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRelocateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_relocate_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('why_relocate');
            $table->string('eligible');
            $table->string('consultation');
            $table->string('countries_visited');
            $table->string('with_family');
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
        Schema::dropIfExists('user_relocate_goals');

    }
}
