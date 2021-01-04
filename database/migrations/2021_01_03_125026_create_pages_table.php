<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('image_short');
            $table->string('image_long');
            $table->longText('meta');
            $table->longText('des_short');
            $table->longText('des_long');
            $table->string('button_title');
            $table->string('button_link');
            $table->string('type');
            $table->string('status')->default(1);
            $table->string('deleted')->default(0);
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
        Schema::dropIfExists('pages');
    }
}
