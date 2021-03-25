<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('quantity');
            $table->string('state',20);
            $table->bigInteger("products_id")->unsigned();
            $table->foreign("products_id")->references("id")->on("products")
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger("warehouses_id")->unsigned();
            $table->foreign("warehouses_id")->references("id")->on("warehouses")
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
        Schema::dropIfExists('distributions');
    }
}
