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
            $table->string('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('username')->unique()->index();
            $table->string('password');
            $table->string('picture')->nullable();
            $table->tinyInteger('is_email_confirmed')->default(0);
            $table->tinyInteger('is_super_admin')->default(0);
            $table->dateTimeTz('last_login_at')->nullable();
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
