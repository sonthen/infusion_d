<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSequenceStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequence_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sequence_id')->unsigned();
            $table->foreign('sequence_id')->references('id')->on('sequences');
            $table->integer('kcp_id')->unsigned();
            $table->foreign('kcp_id')->references('id')->on('kcp_dummies');
            $table->date('sent');
            $table->date('delivered');
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
        Schema::dropIfExists('sequence_statuses');
    }
}
