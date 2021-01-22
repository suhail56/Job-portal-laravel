<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosmmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posmms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cname');
            $table->string('jtitle');
            $table->string('location');
            $table->string('jdesc');
            $table->string('vaccancy');
            $table->string('cid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posmms');
    }
}
