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
        //
        schema::table('users', function ($table) {
            $table->string('image')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('permission_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function ($table) {
            $table->dropColumn('image');
            $table->dropColumn('phone_number');
            $table->dropColumn('permission_id');
        });
    }
};
