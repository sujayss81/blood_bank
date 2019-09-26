<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonordonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donordonation', function (Blueprint $table) {
           $table->integer('d_id')->nullable(false);
           $table->integer('bt_id')->nullable(false);
           $table->biginteger('quantity')->nullable(false);
           $table->foreign('d_id')->references('id')->on('donor');
           $table->foreign('bt_id')->references('id')->on('bloodtype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donordonation');
    }
}
