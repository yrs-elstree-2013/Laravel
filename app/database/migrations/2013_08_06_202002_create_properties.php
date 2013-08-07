<?php

use Illuminate\Database\Migrations\Migration;

class CreateProperties extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function($table) {

            $table->increments('id');

            $table->string('council', 100);
            $table->string('address', 500);

            $table->integer('price');

            $table->string('postcode', 10);

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
		Schema::drop('properties');
	}

}