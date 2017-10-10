<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKcpDummiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kcp_dummies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('store_name');
            $table->string('locality');
            $table->string('mobile');
            $table->string('category');
            $table->string('kcp_mode');
            $table->string('city');
            $table->integer('available_limit');
            $table->date('activation_date');
            $table->string('version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kcp_dummies');
    }
}
