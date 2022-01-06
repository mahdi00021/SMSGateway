<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->string('to_phoneNumber');
            $table->string('status');
            $table->string('nameApi');
            $table->string('error');
            $table->index(['id', 'to_phoneNumber', 'status', 'nameApi', 'error']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
