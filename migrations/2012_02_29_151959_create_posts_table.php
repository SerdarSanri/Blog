<?php

class Create_Posts_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}