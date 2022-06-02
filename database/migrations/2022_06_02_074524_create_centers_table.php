<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->id('id_center');
            $table->string('location');
            $table->string('image');
            $table->string('land_line');
            $table->string('time_open');
            $table->string('time_close');
            $table->string('type');
            $table->string('note');
            $table->integer('id_user');
            $table->integer('id_sub');
            $table->date('start_sub_date');
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
        Schema::dropIfExists('centers');
    }
};
