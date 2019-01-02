<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToLawyersClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lawyer_clients', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('lawyer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lawyers_clients', function (Blueprint $table) {
            //
        });
    }
}
