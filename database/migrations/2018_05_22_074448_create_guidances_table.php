<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidances', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('advantage');
            $table->string('demerit');
            $table->string('application');
            $table->string('course')->referencers('courses')->on('course');
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
        Schema::dropIfExists('guidances');
    }
}
