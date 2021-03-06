<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ka_product_order', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('quantity');

            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('ka_products')->onDelete('CASCADE');

            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('ka_orders')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ka_product_order');
	}

}
