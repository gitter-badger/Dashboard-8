<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tagged', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taggable_type');
            $table->integer('taggable_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->index(['taggable_type', 'taggable_id']);
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namespace');
            $table->string('slug');
            $table->string('name');
            $table->integer('count')->default(0)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $tables = ['tagged', 'tags'];
        foreach ($tables as $table) {
            Schema::drop($table);
        }
    }
}
