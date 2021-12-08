<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->double('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->double('discount')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:Available, 1:Not available');
            $table->string('image')->default('welcome/images/dummy.jpg');
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
        Schema::dropIfExists('properties');
    }
}
