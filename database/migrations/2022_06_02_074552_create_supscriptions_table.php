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
        Schema::create('supscriptions', function (Blueprint $table) {
            $table->id('id_sub');
            $table->string('name');
            $table->string('duration');
            $table->string('cost');
            $table->string('note');
            $table->string('type_sub');
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
        Schema::dropIfExists('supscriptions');
    }
};
