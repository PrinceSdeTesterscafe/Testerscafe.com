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
        Schema::create('table_about2', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("subheading");
            $table->text("content");
            $table->string("subheading");
            $table->string("bulletpoint");
            $table->string("image");
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_about2');
    }
};
