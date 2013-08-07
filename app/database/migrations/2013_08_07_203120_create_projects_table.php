<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function($table) {

            $table->increments('id');
            $table->string('weblink');

            $table->string('title', 50);
            $table->string('slogan', 150);
            $table->string('description', 500);

            $table->integer('target');
            $table->integer('progress');

            $table->integer('ownerid');

            $table->string('website', 100);

            $table->string('legalname', 150);

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
        Schema::drop('projects');
    }

}