<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHbPeopleHobbiesConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_people_hobbies_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('people_id', 36)->index('fk_hb_people_hobbies_connection_hb_people_idx');
			$table->string('hobbies_id', 36)->index('fk_hb_people_hobbies_connection_hb_hobies1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_people_hobbies_connection');
	}

}
