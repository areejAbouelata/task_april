<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('category_id')->unsigned();
			$table->string('name', 255);
			$table->text('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}