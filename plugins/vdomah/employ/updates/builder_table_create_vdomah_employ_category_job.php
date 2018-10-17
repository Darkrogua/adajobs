<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmployCategoryJob extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_category_job', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id')->unsigned();
            $table->integer('job_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_category_job');
    }
}