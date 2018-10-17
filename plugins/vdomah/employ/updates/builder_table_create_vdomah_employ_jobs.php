<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmployJobs extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('location');
            $table->text('description');
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('salary_min')->nullable();
            $table->integer('salary_max')->nullable();
            $table->integer('frequency_id')->nullable()->unsigned();
            $table->dateTime('start_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_jobs');
    }
}