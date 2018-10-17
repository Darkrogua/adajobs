<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmploySkills extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_skills', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_skills');
    }
}