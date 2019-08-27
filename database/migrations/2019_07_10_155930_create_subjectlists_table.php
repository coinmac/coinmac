<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjectlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subjectname');
            $table->string('description')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amounti')->nullable();
            $table->string('date1')->nullable();
            $table->string('date2')->nullable();
            $table->string('date3')->nullable();
            $table->string('date4')->nullable();

            $table->string('date1i')->nullable();
            $table->string('date2i')->nullable();
            $table->string('date3i')->nullable();
            $table->string('date4i')->nullable();

            $table->string('venue')->nullable();
            $table->string('venuei')->nullable();
            
            $table->string('subjectid')->nullable();
            $table->string('coursecategory')->nullable();
            $table->string('duration')->nullable();
            $table->string('category')->nullable();
            $table->string('coursecatid')->nullable();
            $table->string('testimony')->nullable();
            $table->string('student')->nullable();
            $table->string('prerequisite')->nullable();
            $table->string('level')->nullable();
            $table->string('tolearn')->nullable();
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
        Schema::dropIfExists('subjectlists');
    }
}
