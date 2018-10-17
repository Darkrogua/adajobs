<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmployTypes extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_types');
    }
}
