<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('username', 100)->unique()->nullable();
            $table->tinyInteger('role')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('about_me')->nullable();
            $table->string('facebook')->nullable();
            $table->string('slack')->nullable();
            $table->tinyInteger('teaching_exp')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('users_name');
            $table->dropColumn('role');
            $table->dropColumn('full_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('birthday');
            $table->dropColumn('address');
            $table->dropColumn('about_me');
            $table->dropColumn('facebook');
            $table->dropColumn('slack');
            $table->dropColumn('teaching_exp');
        });
    }
}
