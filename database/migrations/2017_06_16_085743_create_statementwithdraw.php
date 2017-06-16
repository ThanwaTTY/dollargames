<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementwithdraw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('statementwithdraw', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned()->index();
          $table->integer('deposit_id')->unsigned()->index();
  		    $table->string('balance');
  		    $table->string('bankwithdraw');
  		    $table->string('accountnumberwithdraw');
  		    $table->string('accountnamewithdraw');
  		    $table->string('datetime');
  		    $table->string('channelwithdraw');
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
		      Schema::drop('statementwithdraw');
    }
}
