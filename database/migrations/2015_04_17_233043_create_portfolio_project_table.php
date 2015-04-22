<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio_project', function(Blueprint $table)
		{
			$table->integer('portfolio_id')->nullable()->unsigned()->index();
			$table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
			$table->integer('project_id')->nullable()->unsigned()->index();
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
			$table->integer('order');
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
		Schema::drop('portfolio_project');
	}

}
