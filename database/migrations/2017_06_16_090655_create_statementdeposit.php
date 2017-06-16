<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementdeposit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('statementdeposit', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('deposit_id')->unsigned()->index();
            $table->string('username');
            $table->string('balance');
            $table->string('bankdeposit');
            $table->string('accountnumberdeposit');
            $table->string('accontnamedeposit');
            $table->string('datetime');
            $table->string('channeldeposit');
            $table->string('opinion');
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
        Schema::drop('statementdeposit');
    }
}
