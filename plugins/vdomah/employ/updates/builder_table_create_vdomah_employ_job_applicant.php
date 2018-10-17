<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVdomahEmployJobApplicant extends Migration
{
    public function up()
    {
        Schema::create('vdomah_employ_job_applicant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('job_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vdomah_employ_job_applicant');
    }
}