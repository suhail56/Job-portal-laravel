<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cname');
            $table->string('jtitle');
            $table->string('location');
            $table->string('jdesc');
            $table->string('vaccancy');
            $table->string('cid');
            $table->string('cnames');
            $table->string('jtitles');
            $table->string('locations');
            $table->string('jdescs');
            $table->string('vaccancys');
            $table->string('cids');
            $table->string('cnameq');
            $table->string('jtitleq');
            $table->string('locationq');
            $table->string('jdescq');
            $table->string('vaccancyq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applies');
    }
}
