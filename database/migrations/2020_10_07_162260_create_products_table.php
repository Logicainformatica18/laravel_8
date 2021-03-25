<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger("providers_id")->unsigned();
            $table->foreign("providers_id")->references("id")->on("providers")
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string("description");
            $table->string("detail")->nullable();
            $table->string("code_box")->nullable();
            $table->decimal("price1",20,2);
            $table->decimal("price2",20,2);
            $table->decimal("price3",20,2);
            $table->decimal("cost",20,2);
            $table->bigInteger("sizes_id")->unsigned();
            $table->foreign("sizes_id")->references("id")->on("sizes")
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger("types_id")->unsigned();
            $table->foreign("types_id")->references("id")->on("types")
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger("categories_id")->unsigned();
            $table->foreign("categories_id")->references("id")->on("categories")
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger("colors_id")->unsigned();
            $table->foreign("colors_id")->references("id")->on("colors")
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
