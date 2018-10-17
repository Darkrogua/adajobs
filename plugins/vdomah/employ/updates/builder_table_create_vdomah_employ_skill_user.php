<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmploySkillUser extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_skill_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('skill_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_skill_user');
    }
}