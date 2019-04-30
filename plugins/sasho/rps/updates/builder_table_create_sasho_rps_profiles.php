<?php namespace Sasho\Rps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSashoRpsProfiles extends Migration
{
    public function up()
    {
        Schema::create('sasho_rps_profiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('game_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('user_choice')->nullable();
            $table->string('pc_choise')->nullable();
            $table->string('result')->nullable();
            $table->integer('count')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sasho_rps_profiles');
    }
}
