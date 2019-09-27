<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonorTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('fname')->nullable(false);
            $table->string('lname')->nullable(false);
            $table->date('dob')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->string('address')->nullable(false);
            $table->biginteger('contact')->nullable(false);
            $table->string('password')->nullable(false);
            $table->integer('bt_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor');
    }
}
