<?php namespace Sasho\Rps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSashoRpsProfiles extends Migration
{
    public function up()
    {
        Schema::table('sasho_rps_profiles', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('user_choice')->change();
            $table->string('pc_choise')->change();
            $table->string('result')->change();
        });
    }
    
    public function down()
    {
        Schema::table('sasho_rps_profiles', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('user_choice', 191)->change();
            $table->string('pc_choise', 191)->change();
            $table->string('result', 191)->change();
        });
    }
}
