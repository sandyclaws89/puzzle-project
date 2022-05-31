<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuzzlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puzzles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->integer('pieces');
            $table->binary('image')->nullable();
            $table->string('description', 500);
            $table->string('brand', 250)->nullable();
            $table->decimal('price');
            $table->boolean('available');
            $table->tinyInteger('quantity')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzles');
    }
}
