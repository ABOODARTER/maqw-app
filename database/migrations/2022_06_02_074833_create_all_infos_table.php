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
        Schema::create('all_infos', function (Blueprint $table) {
            $table->id('id_all_phone');
            $table->string('name');
            $table->integer('id_center');
            $table->integer('id_device');
            $table->string('color');
            $table->string('ram');
            $table->string('hard_storage');
            $table->string('statue');
            $table->string('num_of_devices');
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
        Schema::dropIfExists('all_infos');
    }
};
