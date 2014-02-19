<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTranslationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('article_langs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_id');
            $table->enum('lang', ['nl', 'fr', 'it']);
            $table->string('title',255);
            $table->text('content');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('article_langs');
	}

}
