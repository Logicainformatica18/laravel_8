<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('category_products', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger("category_id")->unsigned();
        //     $table->foreign("category_id")->references("id")->on("categories")
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        //     $table->bigInteger("product_id")->unsigned();
        //     $table->foreign("product_id")->references("id")->on("products")
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
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
        Schema::dropIfExists('category_products');
    }
}
