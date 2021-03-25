<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductHasColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('product_has_colors', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger("products_id")->unsigned();
        //     $table->foreign("products_id")->references("id")->on("products")
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        //     $table->bigInteger("colors_id")->unsigned();
        //     $table->foreign("colors_id")->references("id")->on("colors")
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        //     $table->bigInteger('quantity');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_has_colors');
    }
}
