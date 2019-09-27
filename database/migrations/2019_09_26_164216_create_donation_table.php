<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->nullable(false);
            $table->Integer('donor_id')->nullable(false);
            $table->Integer('bt_id')->nullable(false);
            $table->string('b_group')->nullable(false);
            $table->integer('quantity')->nullable(false)->default(0);
            $table->date('d_date')->nullable(false);
            $table->foreign('donor_id')->references('id')->on('donor');
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
        Schema::dropIfExists('donation');
    }
}
