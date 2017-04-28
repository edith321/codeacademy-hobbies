<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHbPeopleHobbiesConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hb_people_hobbies_connection', function(Blueprint $table)
		{
			$table->foreign('hobbies_id', 'fk_hb_people_hobbies_connection_hb_hobies1')->references('id')->on('hb_hobies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('people_id', 'fk_hb_people_hobbies_connection_hb_people')->references('id')->on('hb_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hb_people_hobbies_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_hb_people_hobbies_connection_hb_hobies1');
			$table->dropForeign('fk_hb_people_hobbies_connection_hb_people');
		});
	}

}
