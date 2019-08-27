<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("subjectid");
            $table->string("stitle");
            $table->text("scontent")->nullable();
            $table->string("surl")->nullable();
            $table->string("simage")->nullable();
            $table->string("stype")->nullable();
            $table->string("scategory")->nullable();
            $table->string("sstatus")->nullable();
            $table->string("stime")->nullable();
            $table->string("sauthor")->nullable();
            $table->string("sremarks")->nullable();
            $table->text("soverview")->nullable();
            $table->string("sfee")->nullable();
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
        Schema::dropIfExists('syllabi');
    }
}
