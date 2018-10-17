<?php namespace Vdomah\Employ\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1012 extends Migration
{
    public function up()
    {
        Schema::table('lovata_buddies_users', function($table)
        {
            $table->integer('city_id')->nullable()->unsigned();
            $table->integer('institution_id')->nullable()->unsigned();
            $table->text('about')->nullable();
            $table->string('company_name')->nullable();
            $table->text('company_description')->nullable();
            $table->string('company_website')->nullable();
            $table->string('suburb')->nullable();
            $table->integer('age')->nullable()->default(0);
            $table->integer('gender')->nullable();
            $table->string('ic')->nullable();
        });
    }

    public function down()
    {
        Schema::table('lovata_buddies_users', function($table)
        {
            $table->dropColumn('city_id');
            $table->dropColumn('institution_id');
            $table->dropColumn('about');
            $table->dropColumn('company_name');
            $table->dropColumn('company_description');
            $table->dropColumn('company_website');
            $table->dropColumn('suburb');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('ic');
        });
    }
}