<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursecatrgoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursecatrgories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coursename');
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('courseid')->nullable();
            $table->string('image')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('coursecatrgories');
    }
}
