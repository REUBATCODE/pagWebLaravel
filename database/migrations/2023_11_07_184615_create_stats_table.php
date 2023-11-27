<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->integer('champion_id');
            $table->integer('health_points');
            $table->integer('mana');
            $table->integer('attack_damage');
            $table->integer('ability_power');
            $table->integer('armor');
            $table->integer('magic_resist');
            $table->integer('movement_speed');
            $table->double('attack_speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
