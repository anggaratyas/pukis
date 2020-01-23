<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik', 16)->unique();
            $table->char('kk', 16)->nullable();
            $table->string('name')->nullable();
            $table->string('born_place')->nullable();
            $table->date('born')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->text('address')->nullable();
            $table->char('rt', 3)->nullable();
            $table->char('rw', 3)->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->char('poscode', 5)->nullable();
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            $table->string('mom')->nullable();
            $table->string('dad')->nullable();
            $table->char('phone', 14)->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('pict_home')->nullable();
            $table->string('slug');
            $table->unsignedBigInteger('courier_id');
            $table->integer('point');
            $table->integer('deposit');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('courier_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
}
