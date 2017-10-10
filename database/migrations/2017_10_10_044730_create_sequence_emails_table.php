<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSequenceEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequence_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sequence_id')->unsigned();
            $table->foreign('sequence_id')->references('id')->on('sequences');
            $table->string('body');
            $table->string('subject');
            $table->integer('sequence_delay');
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
        Schema::dropIfExists('sequence_emails');
    }
}
