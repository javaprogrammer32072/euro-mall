<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonanzaTable extends Migration
{
    public function up()
    {
        Schema::create('bonanza', function (Blueprint $table) {
            $table->id();
            $table->double('left_business')->nullable();
            $table->double('right_business')->nullable();
            $table->integer('direct_business')->nullable();
            $table->double('amount')->nullable();
            $table->integer('count')->nullable();
            $table->double('price')->nullable();
            $table->string('description')->nullable(); // Add the description field
            $table->integer('no_of_direct_business')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bonanza');
    }
}
