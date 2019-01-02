<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToLawfirm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lawfirms', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('customization_id')->references('id')->on('customizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lawfirm', function (Blueprint $table) {
            //
        });
    }
}
