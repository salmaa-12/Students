<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFirstBody extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seconds', function (Blueprint $table) {
            $table->string('body');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->string('body');
        });

        Schema::table('adds', function (Blueprint $table) {
            $table->string('body');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seconds', function (Blueprint $table) {
            $table->dropColumn('body');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('body');
        });
    }
}
