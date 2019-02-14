<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('phonenum')->unique();
            $table->string('password');
            $table->float('assets')->default(0);
            $table->integer('re_id')->nullable();
            $table->string('a_pay')->nullable();
            $table->string('a_name')->nullable();
            $table->string('disabled')->nullable();
            $table->string('task_id')->nullable();
            $table->string('message')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
