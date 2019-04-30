<?php namespace Sasho\Rps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSashoRpsGames extends Migration
{
    public function up()
    {
        Schema::create('sasho_rps_games', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->integer('user_id');
            $table->string('name');
            $table->string('result')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sasho_rps_games');
    }
}
