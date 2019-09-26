<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->Integer('id')->autoincrement()->nullable(false);
            $table->Integer('bt_id')->nullable(false);
            $table->biginteger('quantity')->nullable(false);
            $table->string('h_name')->nullable(false);
            $table->date('o_date')->nullable(false);
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
        Schema::dropIfExists('hospital');
    }
}
