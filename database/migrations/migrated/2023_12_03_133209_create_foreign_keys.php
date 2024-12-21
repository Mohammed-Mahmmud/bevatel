<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('rig', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('company')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('Users')
						->onDelete('cascade')
						->onUpdate('cascade');
		$table->foreign('company_id')->references('id')->on('company')
						->onDelete('cascade')
						->onUpdate('cascade');
		$table->foreign('rig_id')->references('id')->on('rig')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Rig', function(Blueprint $table) {
			$table->dropForeign('Rig_company_id_foreign');
		});
		Schema::table('Order', function(Blueprint $table) {
			$table->dropForeign('Order_user_id_foreign');
		});
	}
}