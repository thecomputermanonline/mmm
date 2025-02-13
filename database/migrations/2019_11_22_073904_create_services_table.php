<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
          //  $table->integer('user_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('excerpt');
            $table->text('body');
            $table->boolean('is_published')->default('1');
            $table->timestamps();
           // $table->timestamps('published_at')->nullable();
            //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
