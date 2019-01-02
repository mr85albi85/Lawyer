<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_temps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('procedure_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('subtitle');
            $table->dateTime('last_change');
            $table->string('path');
            $table->integer('state');
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
        Schema::dropIfExists('document_temps');
    }
}
