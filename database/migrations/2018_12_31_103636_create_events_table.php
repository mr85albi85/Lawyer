<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('importance');
            $table->string('state');
            $table->date('event_date');
            $table->string('event_location')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('partecipant_id')->unsigned()->nullable();
            $table->integer('procedure_id')->unsigned()->nullable();
            $table->integer('event_category_id')->unsigned();
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
        Schema::dropIfExists('events');
    }
}
