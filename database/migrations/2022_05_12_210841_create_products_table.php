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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name',255);
            $table->text('dec')->nullable();
            $table->double('price')->default('0');
            $table->string('image');
            $table->timestamps();
            /*
                         $table->unsignedBigInteger('categores_id');
                         $table->foreign('categores_id')->references('id')->on('categores')->onDelete('cascade')->onUpdate('cascade');


             */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
